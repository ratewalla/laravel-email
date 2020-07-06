<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('sendemail', function () {
    
    $data =[
        'title' => 'hello rizwan',
        'content' => 'this is a sample email'
    ];

    Mail::send('emails/test',$data, function($message){

        $message->to('rizatewalla@gmail.com','Rizwan')->subject('Hello Me');

    });

});