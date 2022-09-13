<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Insurance;
use App\Models\post;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {
        // $user = User::find(1);
        // $inurance = Insurance::where('user_id',$user->id)->first();
        // dd($user->insurance);

        // $insurance = Insurance::find(1);
        // dd($insurance->user);

        // $users = User::all();
        $users = User::with('insurance')->get();
        // $insurances = Insurance::all();

        return view('relation.one_to_one',compact('users'));
    }

    public function one_to_many($id)
    {

        $post = post::find($id);
        // dd($post);
        // dd($post->comments);
        $next = post::where('id','>',$post->id)->first();
        $prev = post::where('id','<',$post->id)->orderByDesc('id')->first();



        return view('relation.one_to_many',compact('post','next','prev'));

    }

    public function one_to_many_data(Request $request)
    {
        // dd($request->all());
        Comment::create([
            'comment' => $request->comment,
            'post_id' => $request->post_id,
            'user_id' => 5
        ]);
        return redirect()->back();
    }

    public function many_to_many()
    {
        $std = Student::find(2);
        $courses = Course::all();
        return view('relation.many_to_many',compact('std','courses'));
    }

    public function many_to_many_data(Request $request)
    {

        $std = Student::find(2);
        // $std->courses()->attach($request->course_id);
        // $std->courses()->detach($request->course_id);
        $std->courses()->sync($request->course_id);

        // dd($request->all());
        return redirect()->back();
    }
}
