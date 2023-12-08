<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/login', App\Livewire\Login::class)->name('login');

Route::get('/register', App\Livewire\Register::class)->name('register');

Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/view-videos', App\Livewire\ViewVideos::class)->name('view.videos');
    Route::get('/upload-video', \App\Livewire\UploadVideo::class)->name('upload.video');
});

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/view-videos', App\Livewire\ViewVideos::class)->name('view.videos');
});



Route::post('/login', [App\Livewire\Login::class, 'logout'])->name('logout');
