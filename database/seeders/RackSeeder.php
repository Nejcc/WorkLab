<?php

namespace Database\Seeders;

use App\Models\DataCenter\Dcim\Rack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rack::factory()->times(20)->create();
    }
}
