<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;


class DasboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('app.companyDashboard')->with('posts',$user->posts);
    }
}
