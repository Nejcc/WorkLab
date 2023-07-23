<?php

namespace Database\Seeders\Dcim;

use App\Models\DataCenter\Dcim\Manufacturer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payload = [
            [
                'name' => 'Cisco',
            ],
            [
                'name' => 'Cisco Meraki',
            ],
            [
                'name' => 'Jupiter',
            ],
            [
                'name' => 'Panduit',
            ],
            [
                'name' => 'Avocent',
            ],
        ];

        foreach ($payload as $data){
            Manufacturer::create([
                'app_token_id' => 1,
                'name' => $data['name'],
                'slug' => Str::slug($data['name']),
            ]);
        }
    }
}
