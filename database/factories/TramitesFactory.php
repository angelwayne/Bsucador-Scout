<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tramites;


class TramitesFactory extends Factory
{

    protected $model = tramites::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'nombre_corto' => $this->faker->word(),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
