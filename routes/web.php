<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FormContorller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\Site4Controller;
use App\Http\Controllers\Site5Controller;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Notifications\Channels\MailChannel;
use PHPUnit\TextUI\XmlConfiguration\Group;

//use
//namespace

// $route = new Route();
// $route->get();

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

Route::get('form4',[FormContorller::class,'form4'])->name('form4');
Route::post('form4',[FormContorller::class,'form4_data'])->name('form4_data');

Route::get('form5',[FormContorller::class,'form5'])->name('form5');
Route::post('form5',[FormContorller::class,'form5_data'])->name('form5_data');


Route::get('form',[FormContorller::class,'form'])->name('form');
//this route from me

Route::get('send-mail',[MailController::class,'send'])->name('send');

Route::get('contact-us',[MailController::class,'contact_us']);
Route::post('contact-us',[MailController::class,'contact_us_data'])->name('contact_us');

Route::get('send-gmail',[MailController::class,'send_gmail']);
Route::post('send-gmail',[MailController::class,'send_gmail_data'])->name('send_gmail');










// this route is responsible of CRUD APP.. (D => Delete){Trash/Recycle bin}(1)
Route::get('posts/trash',[PostController::class,'trash'])->name('posts.trash');

// this route is responsible of CRUD APP.. (D => Delete){Restore deleted items}(2)
Route::get('posts/{id}/restore',[PostController::class,'restore'])->name('posts.restore');

// this route is responsible of CRUD APP.. (D => Delete){delete permenantly, forever}(3)
Route::get('posts/{id}/forcedelete',[PostController::class,'forcedelete'])->name('posts.forcedelete');

// this route is responsible of CRUD APP.. (D => Delete){Restore All Deleted  items}(4)
Route::get('posts/restore-all',[PostController::class,'restore_all'])->name('posts.restore_all');

// this route is responsible of CRUD APP.. (D => Delete){Delete All Deleted  items}(5)
Route::get('posts/delete-all',[PostController::class,'delete_all'])->name('posts.delete_all');

// // Basic// this route is responsible of CRUD APP.. (C => Create) {get => to display data}(6)
// Route::get('posts/create',[PostController::class,'create'])->name('posts.create');

// // Basic// this route is responsible of CRUD APP.. (C => Create) {post => to store data}(7)
// Route::post('posts/store',[PostController::class,'store'])->name('posts.store');

// // Basic// this route is responsible of posts page (whole the page)(8)
// Route::get('posts',[PostController::class,'index'])->name('posts.index');

// // Basic// this route is responsible of CRUD APP.. (R => Read)(9)
// Route::get('posts/{id}',[PostController::class,'show'])->name('posts.show');

// // Basic// this route is responsible of CRUD APP.. (D => Delete)(10)
// Route::delete('posts/{id}',[PostController::class,'destroy'])->name('posts.destroy');

// // Basic// this route is responsible of CRUD APP.. (U => Update)(11)(12)
// Route::get('posts/{id}/edit',[PostController::class,'edit'])->name('posts.edit');
// Route::put('posts/{id}/update',[PostController::class,'update'])->name('posts.update');

// this route is an بديل عن ال7 روابط الأساسية الي فوق
Route::resource('posts', PostController::class);

Route::resource('products',ProductController::class);



// Relationship routes
Route::get('one-to-one',[RelationController::class,'one_to_one']);

// Route::get('one-to-many',[RelationController::class,'one_to_many']);I will rename this to>
// 'my-posts/{id}
Route::get('my-posts/{id}',[RelationController::class,'one_to_many'])->name('mypost');
Route::post('one-to-many',[RelationController::class,'one_to_many_data'])->name('one_to_many_data');

Route::get('many-to-many',[RelationController::class,'many_to_many']);
Route::post('many-to-many',[RelationController::class,'many_to_many_data'])->name('many_to_many_data');

