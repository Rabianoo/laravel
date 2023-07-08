<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\Registercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get ('index',[Registercontroller::class,'index']);

Route::get ('About',[Registercontroller::class,'About']);
Route::get ('welcome',[Registercontroller::class,'welcome']);


Route::get('form',[Registercontroller::class,'Register']);
Route::post('form',[Registercontroller::class,'reg_data']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('index/',function(){
//     return view('index');
// });
// Route::get('About/{name?}' , function($name = null){
//     $abc = compact('name');
//     return view('About')->with($abc);
// });