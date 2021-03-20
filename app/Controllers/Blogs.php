<?php namespace App\Controllers;
use App\Models\blog;
class Blogs extends BaseController
{
	public function index()
	{
		$data["page"] = "Blogs";
		$data['meta'] = Array("title"=>"APS GLOBAL | Blogs","keywords"=>"construction, architecture");	
        $blog = new Blog();
        $blog_builder = $blog->builder();
		$data['blog_builder'] = $blog_builder;
        return view('Blogs',$data);
	}
	//--------------------------------------------------------------------

    public function viewBlog($id){
        $data["result"] = array();
        // $data["page"] = "Login";
        //     $data['meta'] = Array("title"=>"Corporate CRM System");	
            $blog = new Blog();
            $builder = $blog->builder();
            $data['builder'] = $builder;
            $query = $builder->where("id", $id)->where("status", "A")->get();
    
            foreach ($query->getResult() as $row) {
                array_push($data["result"], array("id" => $row->id, "title" => $row->title, "content" => $row->content, "img" => $row->img,
                "author" => $row->author,"date" => $row->added_on, ));
            }
            if (empty($data["result"])) {
                $data["status"] = "failed";
            } else {
                $data["status"] = "success";
            }
        
    
            $blog = new Blog();
            $blog_builder = $blog->builder();
            $data['blog_builder'] = $blog_builder;
            return view('ViewBlog',$data);
          
    }
 }

