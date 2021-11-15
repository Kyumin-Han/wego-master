<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Project_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    protected function uploadFile($request) {
        $name = $request->file('file')->getClientOriginalName();
        $extension = $request->file('file')->extension();
        $nameWithoutExtension = Str::of($name)->basename('.'.$extension);
        $fileName = $nameWithoutExtension . '_' . time() . '.' . $extension;
        $request->file('file')->storeAs('public/files', $fileName);
        return $fileName;
    }

    public function store(Request $request) {
        $name = $request->projectTitle;
        $outline = $request->outline;
        $explanation = $request->expectation;
        $file = $request->file;

        $project = new Project();
        $project->name = $name;
        $project->user_id = Auth::user()->id;
        $project->outline = $outline;
        $project->explanation = $explanation;
        
        if($request->file('file')) {
            if($project->file != null) {
                $imagePath = 'public/images/'.$project->file;
                Storage::delete($imagePath);
            }
            $project->file=$this->uploadFile($request);
        }

        $project->save();

        return redirect('/wego/projectList');
    }

    public function list() {
        $participant = Project_user::find(Auth::user()->id);
        $project = Project::latest()->paginate(5);
        return view('front/projectList', ['projects'=>$project, 'participant'=>$participant]);
    }

    public function show(Request $request, $id) {
        $project = Project::find($id);
        $page = $request->page;

        return view('front/showProject',compact('project', 'page'));
    }
}
