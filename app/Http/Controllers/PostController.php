<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use mysqli;

class PostController extends Controller
{
    public function index()
    {
        // $posts = 'SELECT * FROM posts';
        // $posts = mysqli_query($conn , $posts);
        // $posts = mysqli_fetch_all($posts);

        // $posts = post::all();
        // dd($posts);

        if(request()->has ('search')) {
            $posts = post::where('title' ,'like','%'. request()->search . '%')->orderBy('id','desc')->paginate(10);
            }
            else {
            // $posts = post::orderBy('id','desc')->paginate(10);
            $posts = post::orderByDesc('id')->paginate(10);
            // $posts = post::latest('id')->paginate(10);
            }
        // $posts = post::paginate(20);
        // $posts = post::simplePaginate(10);

        return view('posts.index',compact('posts'));
    }

    public function trash()
    {

            $posts = post::onlyTrashed()->orderByDesc('id')->get();


            return view('posts.trash',compact('posts'));
    }

    public function restore($id)
    {
        post::onlyTrashed()->find($id)->restore();
        return redirect()->back();
    }

    public function forcedelete($id)
    {
        post::onlyTrashed()->find($id)->forcedelete();
        return redirect()->back();
    }

    public function show($id)
    {

        // $post = post::findorFail($id);
        $post = post::find($id);
        if(!$post){
            return redirect()->route('posts.index');
        }
        // $post = post::find($id);
        // if(!$post){
        //     abort(404);
        // }
         dd($post->title);
    }

    public function destroy($id)
    {

        post::destroy($id);
        return redirect()->route('posts.index')->with('msg','Post deleted successfully');
        // return redirect()->back();
        // dd($id);
    }

    public function restore_all()
    {
        post::onlyTrashed()->restore();
        return redirect()->back();
    }

    public function delete_all()
    {
        post::onlyTrashed()->forcedelete();
        return redirect()->back();
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        dd($request->all());

        // Validation

        // Uploads Files

        // Store data to database

        // redirect the user
    }
}
