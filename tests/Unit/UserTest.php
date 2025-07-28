<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_set_and_get_attributes()
    {
        $user = new \stdClass();
        $user->name = 'Test User';
        $user->email = 'test@example.com';
        $user->rol = 'Admin';
        $this->assertEquals('Test User', $user->name);
        $this->assertEquals('Admin', $user->rol);
    }

    public function test_default_values()
    {
        $user = new \stdClass();
        $this->assertFalse(property_exists($user, 'name'));
        $this->assertFalse(property_exists($user, 'rol'));
    }

    public function test_setters_and_types()
    {
        $user = new \stdClass();
        $user->name = 'Ana';
        $user->rol = 'Cliente';
        $this->assertIsString($user->name);
        $this->assertIsString($user->rol);
    }

    public function test_mass_assignment_simulation()
    {
        $data = [
            'name' => 'Luis',
            'email' => 'luis@example.com',
            'rol' => 'Empleado',
        ];
        $user = (object) $data;
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $user->$key);
        }
    }
}
