<?php namespace App\Controllers;
use App\Models\Blog;
class About extends BaseController
{
	public function index()
	{
		$data["page"] = "About";
		$data['meta'] = Array("title"=>"APS GLOBAL | About","keywords"=>"construction, architecture");	
        $blog = new Blog();
        $blog_builder = $blog->builder();
		$data['blog_builder'] = $blog_builder;
        return view('About',$data);
	}
	//--------------------------------------------------------------------

}
