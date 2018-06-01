<?php
use App\Post;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function () {
//    return 'Hi there this is about page';
//});
//
//Route::get('/contact', 'PostController@contact');
//
//Route::get('/post/{id}/{name}', function ($id,$name) {
//    return 'This is post number'.$id .' With name'.$name;
//});
//
//Route::get('/admin/posts/example',array('as' => 'admin.home',function(){
//    $route = route('admin.home');
//    $link = "<a href='".$route."'>Click here</a>";
//    return $link;
//}));
//
////Route::get('/post/{id}','PostController@index');
//
//// Route::resource('posts','PostController');
//
//Route::get('/post/{id}/{name}/{password}','PostController@show_post');

Route::get('/insert',function (){

    DB::insert('INSERT into posts(title,content) VALUES (?,?)',['THIS IS LARAVEL TITLE','THIS IS CONTENT']);

});
//Route::get('/read',function (){
//
//    $results = DB::select('SELECT * FROM posts WHERE id = ?',[1]);
//    $output = '';
//    foreach ($results as $result){
//        $output .= $result->title;
//    }
//    return $output;
//});

//Route::get('/update',function(){
//
//   $updated =  DB::update('UPDATE posts SET title = "UPDATE TITLE" WHERE id = ?',[1] );
//
//   return $updated;
//});


//Route::get('/delete',function (){
//
//    $deleted = DB::delete('DELETE FROM posts WHERE id = ?',[1]);
//
//    return $deleted;
//});


//  ELOQUENT

Route::get('/read',function (){

    $posts = Post::all();
    foreach ($posts as $post){
        return $post->title;
    }
});
//
//Route::get('/find',function (){
//     $post = Post::find(1);
//     return $post->title;
//});

Route::get('/findwhere',function (){

    $post = Post::where('id',1)->orderBy('id','desc')->take(1)->get();

    return $post;
});

Route::get('/findmore',function (){

    $posts = Post::findOrFail(1);

    return $posts;
});

Route::get('/delete0',function (){

    $deleted = DB::delete('DELETE FROM posts WHERE id = ?',[1]);

    return $deleted;
});

Route::get('/delete',function (){
    $post =  POST::find(1);
    $post->delete();
});

Route::get('/delete2',function (){
    Post::destroy(3);
});

Route::get('/softdelete',function(){
    $post = Post::find(2);
    $post->delete();    
});

 // ELOQUENT

// ONE TO ONE RELATIONSHOP
Route::get('/user/{id}/post',function ($id){
    return User::find($id)->post->title;
});
Route::get('/post/{id}/user',function ($id){
    return Post::find($id)->user->name;
});

// ONE TO MANY RELATIOSHIP
Route::get('/posts',function(){
   $user = User::find(1);
   foreach($user->posts as $post){
       echo $post->title."<br>";
   }
});











