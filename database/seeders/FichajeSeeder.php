<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fichaje;

class FichajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fichaje::factory()->times(48)->create();
    }
}
