<?php

namespace Tests;

use PHPUnit\Framework\Attributes\Test;

abstract class AbstractModelTest extends TestCase
{
    protected string $model;

    protected array $fillable = [];

    #[Test]
    public function check_fillable_fields(): void
    {
        $model = new ($this->model);
        $this->assertEquals($this->fillable, $model->getFillable());
    }
}
