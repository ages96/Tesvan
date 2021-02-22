<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectObjective;
use App\Models\ProjectResult;
use App\Models\TechnologyTool;
use App\Models\ClientFeedback;

use Mail;

class ProjectController extends Controller
{

    public function index() {
    	$data['project'] = Project::getList();
        return view('project.project',$data);
    }

    public function detail($id) {
    	$data['project'] = Project::where("id",$id)->first();
    	$data['project_objective'] = ProjectObjective::where('project_id',$id)->get();
    	$data['project_result'] = ProjectResult::where('project_id',$id)->get();
    	$data['technology_tool'] = TechnologyTool::where('project_id',$id)->get();
    	$data['client_feedback'] = ClientFeedback::where('project_id',$id)->get();
    	$data['related'] = Project::where('id','!=',$id)->limit(3)->get();

        return view('project.detail',$data);
    }
}
