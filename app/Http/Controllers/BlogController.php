<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectObjective;
use App\Models\ProjectResult;
use App\Models\TechnologyTool;
use App\Models\ClientFeedback;
use App\Models\Blog;

use Mail;

class BlogController extends Controller
{

    public function index() {
    	$data['blog'] = Blog::orderBy("id","desc")->with('user')->limit(4)->get();
        $data['blog_popular'] = Blog::orderBy("view","desc")->limit(3)->get();
        $data['blog_recent'] = Blog::orderBy("id","desc")->get();
        $data['pathimage'] = url("uploads/images/blogs");
        return view('blog.blog',$data);
    }

    public function detail($name, $id) {

        $data['bd'] = Blog::where('id',$id)->first();
    	$data['blog'] = Blog::where('id',"!=",$id)->get();
        $data['blog_interest'] = Blog::where('id',"!=",$id)->get();
        $data['pathimage'] = url("uploads/images/blogs");

        if (!$data['blog']){
            abort(404);
        }

        viewBlog($id);

        return view('blog.detail',$data);
    }
}
