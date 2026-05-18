<?php

// use Illuminate\Http\Request as HttpRequest;

use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('/',[HomeController::class,'index']);

// Route::get('jobs',function(){
// return 'Available Jobs';
// })->name('job');

// multiple methods
// Route::match(['get', 'post'], '/submit', function () {
//     return 'Submited';
// });

// Route::get('/test',function(){
// $url=route('job');
// return "<a href='$url'>Click here</a>";
// });

// Returning Json
// Route::get('/users/api',function(){
// return [
//     'name'=>'John Doe',
//      'email'=>'test@gmail.com'
// ];
// });

# Route params
// Route::get('/post/{id}',function(String $id){
//   return "post ".$id;
// })->where('id','[0-9]+');
// ## multiple params
// Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
//     return 'Post ' . $postId . ' Comment ' . $commentId;
// });


// ## Optianal parameters
// Route::get('/user/{name?}', function ($name = null) {
//     return $name ? 'User ' . $name : 'No user specified';
// });

## Request objects
// Route::get('/test',function(Request $request){
// return $request;

// });

// Route::get('/user', function (Request $request) {
//     return $request->query('name');
// });

## Request helper
// Route::get('/test',function(){
// return response("Hello Respone");
// });

# status code   
// Route::get('/test', function () {
//     return response('Not Found', 404);
// });

// Route::get('/test', function () {
//     return response('<h1>Hello World</h1>')
//         ->header('Content-Type', 'text/plain');
// });
## Json response
// Route::get('/test', function () {
//     return response()->json(['name' => 'John Doe']);
// });

## file download
// Route::get('/test',function(){
// return response()->download(public_path('fav_icon'));
// });

## cookies 
// Route::get('/test', function () {
//     return response('Hello World')->cookie('name', 'John Doe');
// });
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');




