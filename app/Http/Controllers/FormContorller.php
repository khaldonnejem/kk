<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormContorller extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }
    public function form1_data(Request $request)
    {
        // ال3 دوال هدول فقط للتجريب ملهمش اي همية على ارض الواقع
        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('name'));
        // dd($request->only(['name','age']));
        // $name=$request->input('name');
        $name=$request->name;
        $age=$request->age;
        // dd($name,$age);
        return "Welcome $name , Your Age is $age";
    }
    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        // dd($request->all());
        $name=$request->name;
        $email=$request->email;
        $password=$request->password;
        $age=$request->age;
        return view('forms.form2_data',compact('name','email','password','age'));

    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
      dd($request->all());
    }
}
