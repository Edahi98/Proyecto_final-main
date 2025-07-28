<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ClasesController;

class ClasesControllerTest extends TestCase
{
    public function test_controller_instance()
    {
        $controller = new ClasesController();
        $this->assertInstanceOf(ClasesController::class, $controller);
    }

    public function test_controller_inherits_base_controller()
    {
        $controller = new ClasesController();
        $this->assertInstanceOf(\App\Http\Controllers\Controller::class, $controller);
    }

    public function test_controller_has_public_methods()
    {
        $controller = new ClasesController();
        $this->assertTrue(method_exists($controller, 'list'));
        $this->assertTrue(method_exists($controller, 'index'));
        $this->assertTrue(method_exists($controller, 'edit'));
        $this->assertTrue(method_exists($controller, 'store'));
        $this->assertTrue(method_exists($controller, 'destroy'));
    }
    public function test_controller_class_type()
    {
        $controller = new ClasesController();
        $this->assertEquals('App\\Http\\Controllers\\ClasesController', get_class($controller));
    }

    public function test_controller_has_no_unexpected_attributes()
    {
        $controller = new ClasesController();
        $this->assertFalse(property_exists($controller, 'foo'));
        $this->assertFalse(property_exists($controller, 'bar'));
    }

    public function test_multiple_instances_are_independent()
    {
        $c1 = new ClasesController();
        $c2 = new ClasesController();
        $this->assertNotSame($c1, $c2);
    }

    public function test_controller_has_no_private_or_protected_methods_named_test()
    {
        $controller = new ClasesController();
        $reflection = new \ReflectionClass($controller);
        $methods = $reflection->getMethods();
        foreach ($methods as $method) {
            if (strpos($method->name, 'test') === 0) {
                $this->assertTrue($method->isPublic());
            }
        }
    }
}
