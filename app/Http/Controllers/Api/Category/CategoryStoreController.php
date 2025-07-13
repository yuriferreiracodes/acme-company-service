<?php

namespace App\Http\Controllers\Api\Category;

use App\Http\Controllers\Controller;

class CategoryStoreController extends Controller
{
    public function __invoke()
    {
        return ['message' => 'Store'];
    }
}
