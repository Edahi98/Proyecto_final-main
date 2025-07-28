<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Membresia;

class MembresiaTest extends TestCase
{
    public function test_fillable_attributes()
    {
        $membresia = new Membresia([
            'id_usuario' => 1,
            'clases_adquiridas' => 10,
            'clases_ocupadas' => 2,
            'clases_disponibles' => 8,
        ]);
        $this->assertEquals(10, $membresia->clases_adquiridas);
        $this->assertEquals(8, $membresia->clases_disponibles);
    }

    public function test_set_and_get_attributes()
    {
        $membresia = new Membresia();
        $membresia->clases_adquiridas = 5;
        $membresia->clases_ocupadas = 1;
        $membresia->clases_disponibles = 4;
        $this->assertEquals(5, $membresia->clases_adquiridas);
        $this->assertEquals(1, $membresia->clases_ocupadas);
        $this->assertEquals(4, $membresia->clases_disponibles);
    }

    public function test_attributes_types()
    {
        $membresia = new Membresia([
            'clases_adquiridas' => 7,
            'clases_ocupadas' => 2,
            'clases_disponibles' => 5,
        ]);
        $this->assertIsInt($membresia->clases_adquiridas);
        $this->assertIsInt($membresia->clases_ocupadas);
        $this->assertIsInt($membresia->clases_disponibles);
    }

    public function test_mass_assignment()
    {
        $data = [
            'id_usuario' => 2,
            'clases_adquiridas' => 12,
            'clases_ocupadas' => 3,
            'clases_disponibles' => 9,
        ];
        $membresia = new Membresia($data);
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $membresia->$key);
        }
    }

    public function test_default_values()
    {
        $membresia = new Membresia();
        $this->assertNull($membresia->clases_adquiridas);
        $this->assertNull($membresia->clases_ocupadas);
        $this->assertNull($membresia->clases_disponibles);
    }

    public function test_usuario_relationship_method_exists()
    {
        $membresia = new Membresia();
        $this->assertTrue(method_exists($membresia, 'usuario'));
    }
}
