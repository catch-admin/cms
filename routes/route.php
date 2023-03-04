<?php

use Illuminate\Support\Facades\Route;
use Modules\Cms\Http\Controllers\CategoryController;
use Modules\Cms\Http\Controllers\PostController;
use Modules\Cms\Http\Controllers\TagController;
use Modules\Cms\Http\Controllers\SettingController;

Route::prefix('cms')->group(function(){

	Route::apiResource('category', CategoryController::class);

	Route::apiResource('post', PostController::class);
    Route::put('post/enable/{id}', [PostController::class, 'enable']);

	Route::apiResource('tag', TagController::class);

    Route::post('setting', [SettingController::class, 'store']);
    Route::get('setting', [SettingController::class, 'index']);

    //next
});


