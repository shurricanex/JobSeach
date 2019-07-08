<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\company;
use DB;

class FrontController extends Controller
{
    public function index(){

        return view('page.Home');

    }

    public function showhome (){

        $post= Post::orderBy('created_at', 'desc')->paginate(4);
        return view('page.home')->with('posts',$post);
    }

    public function showJoblist (){

            $post= Post::orderBy('created_at', 'desc')->paginate(6);
            return view('page.JobList')->with('posts',$post);
    }

    public function search1(Request $request){
        $search = $request->get('search');
        $post = DB::table('posts')->where('position', 'like','%'.$search.'%')->paginate(5);

        return view('page.JobList')->with('posts',$post);
    }

    public function showCategory (){
        $post= Post::orderBy('created_at', 'desc')->paginate(6);
        return view('page.JobCategories')->with('posts',$post);
    }

    public function showCompany (){
        $com=company::orderBy('created_at', 'desc')->paginate(4);
        return view('page.companyList')->with('company',$com);
    }

    public function showLocation (){
        $post= Post::orderBy('created_at', 'desc')->paginate(10);
        return view('page.jobLocation')->with('posts',$post);
    }
    public function showRegistration(){
        return view('auth.register');
    }
    public function showCompanyDashboard(){
        return view('app.companyDashboard');
    }
}
