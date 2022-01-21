<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\modelCentro;

class modelCentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        modelCentro::factory()->times(48)->create();
    }
}
