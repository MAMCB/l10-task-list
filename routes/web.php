<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return view('welcome');
   
});

Route::get('/main', function () {
    return view('main');
});

Route::get("/hello", function(){
    return redirect("/greet/World");
})->name("hello");

Route::get("hallo", function(){
    return redirect()->route("hello");
});

Route::get("/greet/{name}", function($name){
    return "Hello, $name";
});

Route::fallback(function(){
    return view("fallback");
});
