<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function blog()
    {
        $blogs=Blog::orderBy('created_at','DESC')->paginate(10);
        return view('blog',compact('blogs')); 
    }
    public function blogdetail(Request $request,$id)
    {
       
    }
    public function likeBlog(Request $request)
    {
       
    }
    public function dislikeBlog(Request $request)
    {
        
    }
    public function commentPost(Request $request)
    {
        
    }
}