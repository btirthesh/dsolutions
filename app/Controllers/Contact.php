<?php namespace App\Controllers;
class Contact extends BaseController
{
	public function index()
	{
		$data["page"] = "Contact";
		$data['meta'] = Array("title"=>"APS GLOBAL | Contact","keywords"=>"construction, architecture");	
        return view('Contact',$data);
	}
	//--------------------------------------------------------------------

}
