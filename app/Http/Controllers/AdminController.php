<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
