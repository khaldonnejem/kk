<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
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
        $next = post::where('id','>',$post->id)->first();
        $prev = post::where('id','<',$post->id)->orderByDesc('id')->first();
            return view('relation.one_to_many',compact('post','next','prev'));
        //  dd($post->title);
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
        $post = new post();
        return view('posts.create',compact('post'));
    }

    public function store(Request $request)
    {

        // dd($request->all());

        // Validation

        //thers 3 ways in laravel to make validation:
        // 1.Request Validation.(what we take befor) ---------------------
        // 2. Validator Class. *******************************************
        // 3. Request Form File. ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^


        // 1.Request Validation. ------------------------------------------
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg',
            // 'image' => 'file|mimes:jpg,jpeg,png,gif',
            'content' => 'required'
        ]);
       // 2. Validator Class. *******************************************
        // Validator::make($request->all(),[
        //     'title' => 'required',
        //     'image' => 'required|image|mimes:png,jpg,jpeg,svg',
        //     'content' => 'required',
        // ])->validate();

        //this way follows Validator class but its for an whos API (if they wanna send a special or another message )*******************************************
        //    $dd = Validator::make($request->all(),[
        //         'title' => 'required',
        //         'image' => 'required|image|mimes:png,jpg,jpeg,svg',
        //         'content' => 'required',
        //     ]);
        //     if($dd->fails()){
        //         return 'Errroooooor';
        //     }

        // 3. Request Form File. ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
        //php artisan make:request PostRequest
        //  an folder will be created in app>>http>>Request>>PostRequest
        // this page(PostRequest) contain two methods:
        // 1.authorize() >> make it true
        // 2.rules() >> put the rules in the method
        //then go to change the name of Request : public function store(PostRequest $request){}








        // Uploads Files

        $img = $request->file('image');
        $img_name = time().rand().$img->getClientOriginalName();
        $img->move(public_path('uploads/posts'), $img_name);

        // Store data to database

        post::create([
            'title' => $request->title,
            'image' => $img_name,
            'content' => $request->content
        ]);

        // this is another way to store in data base
        // $post =new post();
        // $post->title = $request->title;
        // $post->image = $img_name;
        // $post->content = $request->content;
        // $post->save();

        // redirect the user

        return redirect()->route('posts.index')->with('msg','Post created successfully');

    }


    public function edit($id)
    {
        $post = post::find($id);
        return view('posts.edit',compact('post'));
    }


    public function update(Request $request,$id)
    {

        // 1.Request Validation. ------------------------------------------
        $request->validate([
            'title' => 'required',
            // 'image' => 'required|image|mimes:png,jpg,jpeg,svg',
            'image' => 'nullable|mimes:jpg,jpeg,png,gif',
            'content' => 'required'
        ]);

        $post = post::find($id);////////////

        // Uploads Files

        $img_name =  $post->image;
        if ($request->hasFile('image')) {

            File::delete(public_path('uploads/posts/'.$img_name));

            $img = $request->file('image');
            $img_name = time().rand().$img->getClientOriginalName();
            $img->move(public_path('uploads/posts'), $img_name);

        }

        // Store data to database

        $post->update([///////////////
            'title' => $request->title,
            'image' => $img_name,
            'content' => $request->content
        ]);

        // redirect the user

        return redirect()->route('posts.index')->with('msg','Post created successfully');

    }

}
