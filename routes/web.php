<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FormContorller;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\Site4Controller;
use App\Http\Controllers\Site5Controller;
use App\Http\Controllers\UserController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Route::get('/',[WebController::class ,'home']);


// Route::get('/','SiteController@index')->name('index');

// Route::get('/',[SiteController::class,'index'])->name('index');
// Route::get('/about',[SiteController::class,'about'])->name('about');
// Route::get('/contact',[SiteController::class,'contact'])->name('contact');
// Route::get('/user/{id}',[SiteController::class,'user'])->name('user');

// Route::prefix('admin')->name('admin.')->controller(AdminController::class)->group(function(){
//     Route::get('users',['users','users'])->name('users');
//     Route::get('orders',['orders','orders'])->name('users');
//     Route::get('products',['products','products'])->name('users');
// });

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/', [AdminController::class, 'index'])->name('index');
//     Route::get('/products', [AdminController::class, 'products'])->name('products');
//     Route::get('/products', [AdminController::class, 'products'])->name('products');
//     Route::get('/products', [AdminController::class, 'products'])->name('products');
//     Route::get('/products', [AdminController::class, 'products'])->name('products');
// });

// Route::prefix('customers')->name('custormers.')->group(function () {
//     Route::get('/', [CustomerController::class, 'index'])->name('index');
//     Route::get('/profile', [CustomerController::class, 'profile'])->name('profile');
// });

// Route::prefix('users')->name('users.')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('index');
//     Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
// });

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/user/{id}', [SiteController::class, 'user'])->name('user');


Route::get('site1', [Site1Controller::class, 'index'])->name('site1');

Route::prefix('site2')->name('site2.')->group(function () {
    Route::get('/', [Site2Controller::class, 'index'])->name('index');
    Route::get('/about', [Site2Controller::class, 'about'])->name('about');
    Route::get('/contact', [Site2Controller::class, 'contact'])->name('contact');
    Route::get('/post', [Site2Controller::class, 'post'])->name('post');
});

Route::prefix('site3')->name('site3.')->group(function () {

    Route::get('/', [Site3Controller::class, 'index'])->name('index');
    Route::get('/experience', [Site3Controller::class, 'experience'])->name('experience');
    Route::get('/education', [Site3Controller::class, 'education'])->name('education');
    Route::get('/skills', [Site3Controller::class, 'skills'])->name('skills');
    Route::get('/interests', [Site3Controller::class, 'interests'])->name('interests');
    Route::get('/awards', [Site3Controller::class, 'awards'])->name('awards');
});

Route::prefix('site4')->name('site4.')->group(function(){

Route::get('/',[Site4Controller::class,'index'])->name('index');
Route::get('/about',[Site4Controller::class,'about'])->name('about');
Route::get('/services',[Site4Controller::class,'services'])->name('services');
Route::get('/portfolio',[Site4Controller::class,'portfolio'])->name('portfolio');
Route::get('/contact',[Site4Controller::class,'contact'])->name('contact');

});

Route::prefix('site5')->name('site5.')->group(function(){

    Route::get('/',[Site5Controller::class,'index'])->name('index');
    Route::get('/services',[Site5Controller::class,'services'])->name('services');
    Route::get('/portfolio',[Site5Controller::class,'portfolio'])->name('portfolio');
    Route::get('/about',[Site5Controller::class,'about'])->name('about');
    Route::get('/team',[Site5Controller::class,'team'])->name('team');
    Route::get('/contact',[Site5Controller::class,'contact'])->name('contact');

});
Route::get('form1',[FormContorller::class,'form1'])->name('form1');
Route::post('form1',[FormContorller::class,'form1_data'])->name('form1_data');

Route::get('form2',[FormContorller::class,'form2'])->name('form2');
Route::post('form2',[FormContorller::class,'form2_data'])->name('form2_data');

Route::get('form3',[FormContorller::class,'form3'])->name('form3');
Route::post('form3',[FormContorller::class,'form3_data'])->name('form3_data');

