<?php

use App\Events\PrivateEvent;
use App\Events\testingEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',function(){
    event(new testingEvent('Hello Armine'));
    return 'done';
});

Route::get('/private-channel',function(){
    event(new PrivateEvent('Hello',1));
    return 'private';
});


Route::get('send-message',function(){
    App\Jobs\SendMessage::dispatch("TEST MESSAGE");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
