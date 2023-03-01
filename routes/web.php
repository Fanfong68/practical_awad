<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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

// Route::get('/{username}', function ($username) {
//     return view('welcome',['username'=>$username]);
// });

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contactus');
});

Route::get("user/{user}", [Users::class,'loadView']);

Route::get("dataset", [Users::class,'testData']);

Route::view('addUser','addUser');
Route::post('addUser', [Users::class,'addUser']);

Route::get("deleteUser/{id}", [Users::class,'deleteUser']);

Route::get("updateUser/{id}", [Users::class,'showUpdate']);
Route::post("updateUser/{id}", [Users::class,'updateUser']);

Route::view('signUp','signUp');
Route::post('signUp', [Users::class,'signUp']);

Route::get('showOne', [Users::class,'OneToOne']);
Route::get('showMany', [Users::class,'OneToMany']);

Route::view('login','login')->middleware('protectedPage');
Route::post('login', [Users::class,'login']);

Route::view('noaccess','noaccess');

Route::group(['middleware' => ['protectedPage']], function()
    {
        Route::view('signUp','signUp');
        Route::view('contactus','contactus');
    }
);
 

// Route::view("contact",'contact');
//Short syntax


