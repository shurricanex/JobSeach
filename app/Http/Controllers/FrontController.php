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

            $post= Post::orderBy('created_at', 'desc')->paginate(10);
            return view('page.JobList')->with('posts',$post);
    }
    public function showCategory (){
        return view('page.JobCategories');
    }

    public function showCompany (){
        return view('page.companyList');
    }

    public function showLocation (){
        return view('page.jobLocation');
    }
}
