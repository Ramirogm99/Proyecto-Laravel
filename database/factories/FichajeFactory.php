<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fichaje;
use App\Models\Usuario;
use App\Models\Centro;

class FichajeFactory extends Factory
{
    protected $model = Fichaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'entry_date' => $this->faker->date(),
            'departure_date' => $this->faker->date(),
            'user_id' => Usuario::all()->random()->id,
            'workplace_id' => Centro::all()->random()->id,
        ];
    }
}
