<?php

use App\Http\Controllers\JewelleryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Upload;
use Illuminate\Support\Facades\Route;

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
Route::get('/project', function(){
   return view('index');
});
Route::get('/jewellery', [JewelleryController::class, 'insert'])->name('add');
Route::get('/get-data/{id}', [JewelleryController::class, 'fetchdata']);

//Upload 
Route::post('/upload', [Upload::class, 'upload'])->name('upload');
//Mail
Route::post('/mail', [MailController::class, 'send'])->name('send-mail');

//Localiuzation
Route::get('lang/{lang}', function($locale){
   session()->put('locale', $locale);
   return Redirect()->back();
});