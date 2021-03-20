<?php namespace App\Controllers;
use App\Models\Blog;
class Services extends BaseController
{
	public function index()
	{
		$data["page"] = "Services";
		$data['meta'] = Array("title"=>"APS GLOBAL | Services","keywords"=>"construction, architecture");		

        return view('Services',$data);
	}
	//--------------------------------------------------------------------

}
