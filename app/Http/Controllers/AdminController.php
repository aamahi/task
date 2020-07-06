<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use Cohensive\Embed\Facades\Embed;

class AdminController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function index(){
        return view('admin.admin_home');
    }
    public function add_post(){
        return view('admin.add_post');
    }
    public function add_post_p(Request $request){
        $data=[];
        $data['title']=$request->title;
        $data['photo']=$request->photo;
        $data['description']=$request->description;
        $data['youtobe']=$request->youtobe;
        $data['section']=$request->section;
        $data['status']=0;

        Post::insert($data);
        echo "ok";
//        return $request->all();
//        return $data;
    }

    public function all_post(){
        $posts = Post::all();
        return view('admin.post',compact('posts'));
    }
    public function publish($id){
        $publish = Post::find($id);
        $publish->all();
        $publish->status = 1;
        $publish->save();
        return redirect()->back();
    }
    public function unpublish($id){
        $unpublish = Post::find($id);
        $unpublish->status =0;
        $unpublish->save();
        return redirect()->back();

    }
    public function delete($id){
        $delete = Post::find($id)->delete();
        return redirect()->back();
    }
}
