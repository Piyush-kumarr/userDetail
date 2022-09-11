<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\userController;


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
 

/* Login Route*/
// Route::get('/',[Users::class,'viewLoginForm']);
Route::get('userDataPage',[Users::class,'userDataPage']);
Route::post('loginsubmit',[Users::class,'loginsubmit']);
/* Login Route*/
 
Route::get('createAccount',[Users::class,'createAccount']);
Route::post('dataRegister',[Users::class,'dataRegister']); 
 

 
 
/*Logout button*/

Route::get('/logout', function () {
    if(session()->get('email')){
        session()->pull('email');
    }
    return redirect('/');
});
     
/*Header button Log In And Create Account*/

Route::get('/login', function () {
    if(session()->has('user')){
        return redirect('createAccount');
    }else{
        return redirect('/');
    }
});

Route::get('/create', function () {
    if(session()->has('user')){
        return redirect('/');
    }else{
        return redirect('createAccount');
    }
});

/*Header button Log In And Create Account*/

 
 


Route::get('edituser/{id}',[Users::class,'edit']);

Route::put('update-user/{id}',[Users::class,'update']);

 /* Back Button*/
Route::get('/back',[Users::class,'back']);



// Adimin login 
// Route::get('adminlogin',[Users::class,'adminlogin']);
// Route::get('adminlogindata',[Users::class,'adminlogindata']);
// Route::post('admincheck',[Users::class,'admincheck']);
Route::get('adminedit',[Users::class,'adminedit']);


Route::get('adminlogin',[Users::class,'adminlogin']);
Route::post('adminsubmit',[Users::class,'adminsubmit']);
Route::get('admin',[Users::class,'admin']);

Route::get('adminlogout',[Users::class,'adminlogout']);




 
Route::get('/userpost',[Users::class,'userpost']);