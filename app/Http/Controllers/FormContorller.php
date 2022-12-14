<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CheckWordCount;

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
        $name = $request->name;
        $age = $request->age;
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
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $age = $request->age;
        return view('forms.form2_data', compact('name', 'email', 'password', 'age'));
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

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_data(Request $request)
    {
        $request->validate([
            // 'name' => 'required|min:3|max:20',

            // 'name' => ['required','min:3','max:20' ],
            'name' => ['required', new CheckWordCount(3, 'الاسم مابينفع يكون طويل كثير بدناش اسماء اجدادك')],
            'email' => 'required|email|ends_with:gmail.com',
            'password' => 'required|confirmed|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'bio' => ['required', new CheckWordCount(15, 'بكفي تعبر عن حالك ي براد بيت بدناش نناسبك خف عليناشوي')],

        ]);


        //str_contains()>>>>هاد في بي اتش بي لو عملت قصة النو يتنهي بgmail.com
        //((((( if(empty($_POST['name'])){
        //     return 'Name required';
        // }
        // if(strlen($_POST['name'])<3){
        //     return 'Name must be greater than 3';
        // }
        // if(strlen($_POST['name'])>20){
        //     return 'Name less than 20';
        // } )))))============'name' => 'required|min:3|max:20',
        dd($request->all());
    }

    public function form5()
    {
        // $alph = range('a','z');
        // dd($alph[rand(0,25)]);
        // return time();
        return view('forms.form5');
    }

    public function form5_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cv' => 'required',
        ]);
        $alph = range('a', 'z');
        // move_uploaded_file()

        // $img_name = $request->file('cv')->getClientOriginalName();
        $ex = $request->file('cv')->getClientOriginalExtension();
        // $img_name = rand() . time(). '.'. $ex ;
        $img_name = rand() . '_' . rand() . rand() . '_' . rand() . rand() . rand() . '_' . $alph[rand(0, 25)] . '.' . $ex;

        // khaldon.jpg => 54545453454.jpg
        $request->file('cv')->move(public_path('uplods'), $img_name);
        //Facebook
        // 124959059_2802554533367176_401793153358061574_n

        dd($request->all());
    }
    public function form()
    {
        return view('forms.form');
    }
}
