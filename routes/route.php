<?php

use Illuminate\Support\Facades\Route;
use Modules\Cms\Http\Controllers\CategoryController;
use Modules\Cms\Http\Controllers\PostController;
use Modules\Cms\Http\Controllers\TagController;

Route::prefix('cms')->group(function(){

	Route::apiResource('category', CategoryController::class);

	Route::apiResource('post', PostController::class);
    Route::put('post/enable/{id}', [PostController::class, 'enable']);
    
	Route::apiResource('tag', TagController::class);
	//next
});


