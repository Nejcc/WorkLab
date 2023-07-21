<?php

namespace Database\Seeders\Dcim;

use App\Models\DataCenter\DCIM\Device;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payload = [
            [
                'name'            => 'Cisco IOS',
                'manufacturer_id' => 1, //Cisco
                'napalm_driver'   => 'ios',
            ],
            [
                'name'            => 'Jupiter JunOS',
                'manufacturer_id' => 3, //Jupiter
                'napalm_driver'   => 'junos',
            ],
        ];

        foreach ($payload as $data) {
            Device::create([
                'app_token_id'    => 1,
//                'user_id'      => 1,
                'name'            => $data['name'],
                'slug'            => Str::slug($data['name']),
                'manufacturer_id' => $data['manufacturer_id'],
                'napalm_driver'   => $data['napalm_driver'],
            ]);
        }
    }
}
