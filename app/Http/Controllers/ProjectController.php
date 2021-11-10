<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Project_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    protected function uploadPostImage($request) {
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

        $project = new Project();
        $project->name = $name;
        $project->user_id = Auth::user()->id;
        $project->outline = $outline;
        $project->explanation = $explanation;

        $project->save();

        $projectId = Project::where('name', $name)->where('explanation', $explanation)->get();

        dd($projectId);

        // if($request->file('imageFile')) {
        //     if($user->image != null) {
        //         $imagePath = 'public/images/'.$user->image;
        //         Storage::delete($imagePath);
        //     }
        //     $user->image=$this->uploadPostImage($request);
        // }
        // dd($file);

        return redirect('/wego/projectList');
    }

    public function list() {
        $participant = Project_user::find(Auth::user()->id);
        $project = Project::latest()->paginate(5);
        return view('front/projectList', ['projects'=>$project, 'participant'=>$participant]);
    }
}
