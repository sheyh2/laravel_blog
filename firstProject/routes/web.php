<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Routing\Router;

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
// Route::prefix('/')->group(function(Router $router)
// {
//     $router->match(['get', 'post'], 'home', [MainController::class, 'index'])->name('home');
// });

Route::get('/', function () {
    return view('home');
})->name("home");
Route::get('/about', function () {
    return view('about');
})->name("about");
Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::post('/contact/submit', [ContactController::class, "submit"])->name("submit");


Route::get('test', function(){
    phpinfo();
});