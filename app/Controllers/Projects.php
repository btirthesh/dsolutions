<?php namespace App\Controllers;
use App\Models\Project;
class Projects extends BaseController
{
	public function index()
	{
		$data["page"] = "Projects";
		$data['meta'] = Array("title"=>"APS GLOBAL | Projects","keywords"=>"construction, architecture");	
        $project = new Project();
        $project_builder = $project->builder();
		$data['project_builder'] = $project_builder;
        return view('Projects',$data);
	}
	//--------------------------------------------------------------------

}
