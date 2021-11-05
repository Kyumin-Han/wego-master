<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Project_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
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

        return redirect('/wego/projectList');
    }

    public function list() {
        $participant = Project_user::find(Auth::user()->id);
        $project = Project::latest()->paginate(5);
        return view('front/projectList', ['projects'=>$project, 'participant'=>$participant]);
    }
}
