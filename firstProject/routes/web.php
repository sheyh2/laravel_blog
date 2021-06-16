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

Route::get('/contact/all', [ContactController::class, 'allMessages'])->name("messages");
//Конец

//buttom оброботка
Route::get('/contact/all/{id}', 
[ContactController::class, 'ReadMore']
)->name("more");

Route::get('/contact/all/{id}/update', 
[ContactController::class, 'ContactMessages']
)->name("contact-message");

Route::post('/contact/all/{id}/update', 
[ContactController::class, 'UpdateMessage']
)->name("update-message");

Route::get('/contact/all/{id}/delete', 
[ContactController::class, 'deleteMessage']
)->name("delete-message");
//конец

// Обработка формы "Отправить"
Route::post('/contact/successSend', 
[ContactController::class, "successSend"]
)->name("successSend");