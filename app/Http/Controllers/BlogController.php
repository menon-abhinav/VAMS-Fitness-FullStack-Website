<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Blog;
use App\Comment;

class BlogController extends Controller
{
    // For Main Blog Page
    public function blog(){
        $blog   =   Blog::latest()->get();
        return view('blog.index',compact('blog'));
    }

    // For New Blog Page
    public function new(){
        return view('blog.new');
    }

    // For Single Blog Page
    public function singleblog($id){
        $blog       =   Blog::find($id);
        $comment    =   $blog->comment;
        return view('blog.single',compact('blog','comment'));
    }

    // For comments for particular blog
    public function comment_blog(Request $request,$id){
        $new_comments   =   Comment::create(['blog_id'=>$id,'user_id'=>auth()->user()->id,'content'=>gzdeflate($request->input('comment'))]);
        return redirect()->back();
    }

    // For Storing new Blog
    public function store(Requests\BlogRequest $request){
        $new_blog   =   Blog::create(['subject'=>$request->input('subject'),'content'=>gzdeflate($request->input('content')),'user_id'=>$request->user()->id]);
        return redirect('/newblog')->withSuccess("New Blog has been saved");
    }

    // For Deleteing Blog
    public function delete($token,Request $request){
        $blog       =   Blog::find(decrypt($token));
        
        // If requesting user is the owner of the blog
        if ($blog->user == $request->user()){
            $blog->delete();
            return "Your blog has been successfully deleted";
        }
            return "You are not the owner of this blog";
        }


}
