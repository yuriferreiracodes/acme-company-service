<?php

namespace Tests\Unit\Model;

use App\Models\Category;
use Tests\AbstractModelTest;

class CategoryTest extends AbstractModelTest
{
    protected string $model = Category::class;

    protected array $fillable = ['title', 'url', 'description'];
}
