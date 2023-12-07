<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Auth\EmailChangeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InputController;



Route::get('/about', function () {
    return view('about');
});
Route::get('/contactUs', [MailController::class, 'mailform']);
Route::post('/send-mail', [MailController::class, 'maildata'])->name('send_mail');

Route::get('/userprofile', function () {
    return view('userprofile');
});
Route::get('/donatemoney', function () {
    return view('donatemoney');
});
Route::get('/paymentgateway', [Controller::class,'paymentgateway'])->name('paymentgateway');

Route::get('/educationalprojects', function () {
    return view('educational_projects');
});
Route::get('/healthprojects', function () {
    return view('health_projects');
});
Route::get('/nutritionprojects', function () {
    return view('nutrition_projects');
});
Route::get('/cleanwaterprojects', function () {
    return view('cleanwater');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/donategood', function () {
    return view('donategood');
});