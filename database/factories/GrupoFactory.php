<?php

namespace Database\Factories;

use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grupo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'curso' => $this->faker->numberBetween($min = 1, $max = 4),
            'letra' => $this->faker->randomElement(array('a', 'b', 'c', 'd', 'e', 'f')),
            'nombre' => $this->faker->randomElement(array('PRIMARIA', 'E.S.O', 'BACHILLERATO', 'F.P.B')),
            'anyoescolar' => 1,
            'nivel' => 1,
            'creador' => 1,
        ];
    }
}
