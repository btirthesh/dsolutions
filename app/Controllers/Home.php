<?php namespace App\Controllers;
use App\Models\Project;
use App\Models\Blog;
use App\Models\InquiryDetails;

class Home extends BaseController
{
	public function index()
	{
		$data["page"] = "Home";
		$data['meta'] = Array("title"=>"APS GLOBAL","keywords"=>"construction, architecture");	
		$project = new Project();
        $project_builder = $project->builder();
		$data['project_builder'] = $project_builder;
		
		$blog = new Blog();
        $blog_builder = $blog->builder();
		$data['blog_builder'] = $blog_builder;
		
		return view('Home',$data);
	}

	public function inquire(){
		$inquiry_details = new InquiryDetails();
		$first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
		$phone = $_POST["phone"];
		$service_type = $_POST["service_type"];
		$message = $_POST["message"];

		$data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone' => $phone,
            "service_type" => $service_type,
            "message" => $message

        ];
        $inquiry_details->insert($data);
	}
	//--------------------------------------------------------------------

}
