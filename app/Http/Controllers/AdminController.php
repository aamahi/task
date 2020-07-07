<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Model\Post;
use Illuminate\Http\Request;
use Cohensive\Embed\Facades\Embed;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.admin_home');
    }
    public function add_post(){
        return view('admin.add_post');
    }
    public function add_post_p(PostRequest $request){
        $data=[];
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['youtobe']=$request->youtobe;
        $data['section']=$request->section;
        $data['status']=0;
        $photo_extension = $request->file('photo')->getClientOriginalExtension();
        $photo_name = "post_".rand(1,9).date('Y_m_d').".".$photo_extension;
        $data['photo']=$photo_name;
        $upload_imag = $request->photo->move(public_path('upload/'), $photo_name);
        if($upload_imag){
            Post::insert($data);
            return redirect()->route('post')
                ->with('success','Post Insert Successfully.');
        }else{
            return redirect()->route('all_post')
                ->with('warning','Image Upload Failed.');
        }
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
        return redirect()->route('post')
            ->with('success','Post Published');
    }
    public function unpublish($id){
        $unpublish = Post::find($id);
        $unpublish->status =0;
        $unpublish->save();
        return redirect()->route('post')
            ->with('success','Post Unpublished');

    }
    public function delete($id){
        $delete = Post::find($id)->delete();
        return redirect()->route('post')
            ->with('warning','Post Deleted !');
    }
    public function post_details($id){
        $post_details = Post::find($id);
        return view('admin.post_details',compact('post_details'));
    }
}
