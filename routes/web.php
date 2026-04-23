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
    return Blade::render('
        <x-app-layout>
            <div class="p-10 font-bold text-lg">
                <h1 class="mb-4 text-2xl">Colours:</h1>
                <span class="text-red-500">red</span><br>
                <span class="text-orange-500">orange</span><br>
                <span class="text-yellow-500">yellow</span><br>
                <span class="text-blue-500">blue</span><br>
                <span class="text-purple-500">purple</span><br>
                <span class="text-pink-500">pink</span><br>
                <span class="text-green-500">green</span>
                </div>
        </x-app-layout>
    ');
});
// Route::get('/contact/create', function () {
//     return view('contact.create');
// });
// Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/display-car', function () {
    $myCar = Car::create('Nissan', 'Skyline R34', 1999);
    $myCar = Car::create('BMW', 'F80 M5', 2019);
    $myCar = Car::create('Koenigsegg', 'Jesko Attack', 2024);
    $myCar = Car::create('Buggati', 'Bolide', 2023);
    $myCar = Car::create('Pagani', 'Zonda R', 2012);

    // Mēs "ietinam" auto datus Blade komponentā
    return Blade::render('
        <x-app-layout>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {!! $carHtml !!}
                </div>
            </div>
        </x-app-layout>
    ', ['carHtml' => $myCar->display()]);
});
