<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index(){
        $section1Last = Post::where('status',1)->where('section','1')->orderBy('id','DESC')->first();
        $section2Last = Post::where('status',1)->where('section','2')->orderBy('id','DESC')->first();
        $section1 = Post::where('status',1)->where('section',1)->orderBy('id','DESC')->paginate(4);
        $section2 = Post::where('status',1)->where('section',2)->orderBy('id','DESC')->paginate(4);
        return view('frontend.home',compact('section1','section2','section1Last','section2Last'));
    }
    public  function details($id){
       $post = Post::find($id);
       return view('frontend.details',compact('post'));
    }
}
