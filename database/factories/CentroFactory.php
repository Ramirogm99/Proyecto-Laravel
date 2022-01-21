<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\modelCentro;

class CentroFactory extends Factory
{
    
    protected $model = modelCentro::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name();
        ];
    }
}
