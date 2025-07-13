<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Category\{
    CategoryIndexController,
    CategoryStoreController
};

Route::prefix('categories')->group(function () {
    Route::get('/', CategoryIndexController::class);
    Route::post('/', CategoryStoreController::class);
});
