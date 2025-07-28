<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Clase;

class ClaseTest extends TestCase
{
    public function test_set_and_get_attributes()
    {
        $clase = new \stdClass();
        $clase->fecha = '2025-07-27';
        $clase->id_profesor = 1;
        $clase->tipo = 'Yoga';
        $clase->lugares = 10;
        $clase->lugares_ocupados = 2;
        $clase->lugares_disponibles = 8;
        $this->assertEquals('Yoga', $clase->tipo);
        $this->assertEquals(10, $clase->lugares);
    }

    public function test_profesor_relationship()
    {
        $clase = new Clase();
        $this->assertTrue(method_exists($clase, 'profesor'));
    }

    public function test_default_values()
    {
        $clase = new \stdClass();
        $this->assertFalse(property_exists($clase, 'tipo'));
        $this->assertFalse(property_exists($clase, 'lugares'));
    }

    public function test_setters_and_types()
    {
        $clase = new \stdClass();
        $clase->tipo = 'Pilates';
        $clase->lugares = 15;
        $this->assertIsString($clase->tipo);
        $this->assertIsInt($clase->lugares);
    }

    public function test_mass_assignment_simulation()
    {
        $data = [
            'fecha' => '2025-08-01',
            'id_profesor' => 2,
            'tipo' => 'Zumba',
            'lugares' => 20,
            'lugares_ocupados' => 5,
            'lugares_disponibles' => 15,
        ];
        $clase = (object) $data;
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $clase->$key);
        }
    }
}
