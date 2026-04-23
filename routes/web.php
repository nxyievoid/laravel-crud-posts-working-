<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Models\Car;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
Route::patch('/posts/{post}/status', [PostController::class, 'status'])->name('posts.status');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', function () {
    return view('about');
});
Route::get('/colours', function () {
    return ('Colours:
        red
        <br>
        orange
        <br>
        yellow
        <br>

        '
        );
});
// Route::get('/contact/create', function () {
//     return view('contact.create');
// });
// Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/display-car', function () {
    // Izmantojam statisko 'create' metodi
    $myCar = Car::create('Nissan', 'Skyline R34', 1999);

    // Servējam datus ar echo
    echo $myCar->display();
});
