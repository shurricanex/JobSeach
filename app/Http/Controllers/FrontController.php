<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Company;
use DB;
class FrontController extends Controller
{
    public function index(){
    return view('frontView.home.homeContent');
    }

    public function showhome (){
     return view('page.home');
    }
    public function showJoblist (){
        // $data=DB::table('posts')->get();

        // echo "<pre>";
        // print_r($data);

            $post= Post::all();
            return view('page.JobList')->with('posts',$post);
       // return view('page.joblist');
    }
    public function showCategory (){
        return view('page.JobCategories');
    }
}
