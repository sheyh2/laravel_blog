<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Routing\Router;

// Route::prefix('/')->group(function(Router $router)
// {
//     $router->match(['get', 'post'], 'home', [MainController::class, 'index'])->name('home');
// });


// Навигация в меню
Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");  

Route::get('/contact/all', 
[ContactController::class, 'AllMessages']
)->name("messages");
//Конец

// Обработка формы "Отправить"
Route::post('/contact/successSend', 
[ContactController::class, "successSend"]
)->name("successSend");