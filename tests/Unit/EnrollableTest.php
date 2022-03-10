<?php

namespace Unit;

use Illuminate\Database\Eloquent\Model;
use Thiagoprz\SimpleRole\Enrollable;

class EnrollableTest extends \PHPUnit\Framework\TestCase
{
    /**
     * tests if model has role field attached to it
     *
     * @return void
     */
    public function test_model_has_role_field()
    {
        $model = new class extends Model {
            use Enrollable;
        };
        $this->assertContains('role', $model->getFillable());
    }


    /**
     * @return void
     */
    public function test_set_role_method_success()
    {
        $model = new class extends Model {
            use Enrollable;
        };
        $model->setRole('test');
        $this->assertEquals('test', $model->role);
    }
}