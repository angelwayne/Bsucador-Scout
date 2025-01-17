<?php

namespace Database\Seeders;

use App\Models\Tramites;
use Illuminate\Database\Seeder;

class TramitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tramites::factory()->count(50)->create();
    }
}
