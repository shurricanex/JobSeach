<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    return view('frontView.home.homeContent');
    }


    public function showhome (){
        return view('page.home');
    }
    public function showJoblist (){
        return view('page.joblist');
    }
    public function showCategory (){
        return view('page.JobCategories');
    }
}
