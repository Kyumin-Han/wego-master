<?php

namespace App\Http\Controllers;

use App\Models\Minute;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MinutesController extends Controller
{
    protected function uploadFile($request) {
        $name = $request->file('file')->getClientOriginalName();
        $extension = $request->file('file')->extension();
        $nameWithoutExtension = Str::of($name)->basename('.'.$extension);
        $fileName = $nameWithoutExtension . '_' . time() . '.' . $extension;
        $request->file('file')->storeAs('public/files', $fileName);
        return $fileName;
    }

    public function make(){
        $ownproject = Project::where('user_id', auth()->user()->id)->latest()->get();
    
        return view('front.makeMinutes', ['projects'=>$ownproject]);
    }

    public function store(Request $request) {
        $targetproject = Project::where('name', $request->pname)->first();
        $todo = $request -> todo;
        $nexttodo = $request -> nexttodo;

        $minute = new Minute();
        $minute->project_id = $targetproject->id;
        $minute->todo = $todo;
        $minute->nexttodo = $nexttodo;

        if($request->file('file')) {
            if($minute->file != null) {
                $imagePath = 'public/images/'.$minute->file;
                Storage::delete($imagePath);
            }
            $minute->file=$this->uploadFile($request);
        }

        $minute->save();

        return redirect('/wego/minuteList');
    }

    public function list() {
        $minute = Minute::all();
        return view('front/minutesList', ['minutes'=>$minute]);
    }
}
