<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Centro;

class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Centro::factory()->times(48)->create();
    }
}
