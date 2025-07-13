<?php

namespace App\Http\Controllers\Api\Category;

use App\Http\Controllers\Controller;

class CategoryIndexController extends Controller
{
    public function __invoke()
    {
        return ['message' => 'Index'];
    }
}
