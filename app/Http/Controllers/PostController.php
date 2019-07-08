<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('auth',['except'=>['index','show']]);
//    }

    public function index()
    {
    //    $post= Post::all();
    //     return view('page.JobList')->with('posts',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
//        $request->user()->authorizeRoles('company');
        return view('post.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this -> validate($request, [
            'Position'=> 'required',
            'Job_type'  => 'required',
            'Description'  => 'required',
            'contact'  => 'required',
            'location'=>'required'
        ]);

        $newPost=new Post;
        $newPost->position=$request->input('Position');
        $newPost->Job_type=$request->input('Job_type');
        $newPost->contact_num=$request->input('contact');
        $newPost->location=$request->input('location');
        $newPost->description_job=$request->input('Description');
        $newPost->user_id = auth()->user()->id;

        $newPost->save();
        return redirect('/joblist')->with('Success', 'New Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($PID)
    {
        $showPost=Post::find($PID);
        return view('Post.ShowPost')->with('showPost', $showPost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editPost = Post::find($id);
        if (auth()->user()->id == $editPost->user_id) {
            return view('Post.EditPost')->with('editPost', $editPost);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'Position'=> 'required',
            'Job_type'  => 'required',
            'Description'  => 'required',
            'contact'  => 'required',
            'location'=>'required'
        ]);
        $newPost=Post::find($id);
        $newPost->position=$request->input('Position');
        $newPost->Job_type=$request->input('Job_type');
        $newPost->contact_num=$request->input('contact');
        $newPost->location=$request->input('location');
        $newPost->description_job=$request->input('Description');
        $newPost->save();
        return redirect('/companyDashboard')->with('Success', 'New Post created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletePost=Post::find($id);
        $deletePost->delete();
        return redirect('/companyDashboard')->with('Success', 'Post deleted');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $jobType = $request->get('jobType');
        $location = $request->get('location');
        $post = DB::table('posts')
        ->where('position', 'like','%'.$search.'%')
            ->where('location', 'like','%'.$location.'%')
            ->where('Job_type','like','%'.$jobType.'%')->paginate(15);
        return view('page.home')->with('posts',$post);
    }
    public function search2(Request $request){
        $search = $request->get('search');
        $post = DB::table('posts')->where('position', 'like','%'.$search.'%')->paginate(5);
        return view('page.JobCategories')->with('posts',$post);
    }
    public function search3(Request $request){
        $search = $request->get('search');
        $post = DB::table('posts')->where('location', 'like','%'.$search.'%')->paginate(10);
        return view('page.JobLocation')->with('posts',$post);
    }
    public function search4(Request $request){
        $search = $request->get('popular');
        $post = DB::table('posts')->where('position', 'like','%'.$search.'%')->paginate(10);
        return view('page.home')->with('posts',$post);
    }
//    public function jobType(Request $request){
//        $search = $request->get('search');
//        $post = DB::table('posts')->where('jobType', 'like','%'.$search.'%')->paginate(5);
//        return view('page.home')->with('posts',$post);
//    }

}
