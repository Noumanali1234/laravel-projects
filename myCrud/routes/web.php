<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/' , function (){
   return view('Welcome');
});

Route::resource('users' , UserController::class);

