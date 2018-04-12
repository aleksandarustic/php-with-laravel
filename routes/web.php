<?php

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

//Route::get('/insert',function (){
//
//    DB::insert('INSERT into posts(title,content) VALUES (?,?)',['THIS IS LARAVEL TITLE','THIS IS CONTENT']);
//
//});
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


Route::get('/delete',function (){

    $deleted = DB::delete('DELETE FROM posts WHERE id = ?',[1]);

    return $deleted;
});