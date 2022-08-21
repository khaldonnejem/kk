<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\SiteController;

//use
//namespace
// Route::get('url','Action');
// Route::post('url','Action');
// Route::patch('url','Action');
// Route::put('url','Action');
// Route::delete('url','Action');

//  . 
//  =>
//  ::
//  ->

// http://127.0.0.1:8000/

// Route::get('/',function(){
//     return 'Homepage' ;
// });

// Route::post('news',function(){
//     return 'news page';
// });

// Route::get('about-us',function(){
//     return 'About Us Page';
// });

// Route::get('news',function(){
//     return 'news page';
// });
// Route::put('news',function(){
//     return 'news page';
// });
// Route::delete('news',function(){
//     return 'news page';
// });

// Route::get('/',function(){
//     return view('welcome');
// });
// Route::view('/','welcome');

// Route::any('test',function(){
//     return 'Test';
// });

// Route::match(['post','delete','get'],'newnew',function(){
//     return 'ddddd';
// });

// Route::get('/user',function(){
//     return 'Welcome User';
// });

// Route::get('/user/ahmed',function(){
//     return 'Welcome Ahmed';
// });

// Route::get('/user/{name}/{age}',function($name,$age){
//     return " <br> Welcome  $name , Youre Age Is $age";
// })->Wherealpha('name')->WhereNumber('age');

// Route::get('news',function(){
//     return 'news';
// });
// Route::get('news/{id}',function($id){
//     return 'news ' .$id ;
// });

// Route::get('news/{id?}',function($id = null){
//     return 'news ' .$id ;
// });

// Route::get('/',function(){
//     $post = 14 ;
//     $comment = 240 ;
//     // $url = url('/user/posts/'.$post.'/comments/'.$comment.'/show');
//    $url = route('userinfo', [$post , $comment]);
//     return 'to show the comment of user posts please go to this url: <br>'. $url;

// });

// Route::get('/user/posts/{postid}/comments/{commentid}/show',function($postid,$commentid){
//     return "user post  $postid  comments $commentid" ;
// })->name('userinfo');

// Route::get('admin/users',function(){return 'Admin Users';});
// Route::get('admin/posts',function(){return 'Admin posts';});
// Route::get('admin/comments',function(){return 'Admin comments';});
// Route::get('admin/products',function(){return 'Admin products';});
// Route::get('admin/orders',function(){return 'Admin orders';});
// Route::get('admin/payments',function(){return 'Admin payments';}); 

// Route::get('/',[SiteController::class,'index'])->name('home'); /

Route::get('/',[WebController::class ,'home'])->name('home');



