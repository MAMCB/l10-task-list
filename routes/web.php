<?php

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function ()  {
   return view('index',['tasks' => \App\Models\Task::latest()->get()]);
   
})->name("tasks.index");

Route::get('/tasks/completed', function () {
    return view('index',['tasks' => \App\Models\Task::latest()->where('completed',true)->get()]);
})->name('tasks.completed');

Route::get('/tasks/uncompleted', function () {
    return view('index',['tasks' => \App\Models\Task::latest()->where('completed',false)->get()]);
})->name('tasks.uncompleted');

Route::view('/tasks/create','create')->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {
   
    return view('task',['task' => \App\Models\Task::findOrFail($id)]);
})->name('tasks.show');

Route::post('/tasks',function (Request $request) {
    dd($request->all());
})->name('tasks.store');

Route::fallback(function(){
    return view("fallback");
});


