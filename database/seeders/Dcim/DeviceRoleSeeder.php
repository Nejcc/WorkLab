<?php

namespace Database\Seeders\Dcim;

use App\Models\DataCenter\Dcim\DeviceRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeviceRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payload = [
            [
                'name'    => 'Wan Router',
                'color'   => generateColor(),
                'vm_role' => false,
            ],
            [
                'name'    => 'Access Switch',
                'color'   => generateColor(),
                'vm_role' => false,
            ],
            [
                'name'    => 'Wireless AP',
                'color'   => generateColor(),
                'vm_role' => false,
            ],
            [
                'name'    => 'Patch panel',
                'color'   => generateColor(),
                'vm_role' => false,
            ],
            [
                'name'    => 'Console Server',
                'color'   => generateColor(),
                'vm_role' => false,
            ],
        ];

        foreach ($payload as $data) {
            DeviceRole::create([
                'app_token_id' => 1,
                'user_id'      => 1,
                'name'         => $data['name'],
                'slug'         => Str::slug($data['name']),
                'color'        => $data['color'],
                'vm_role'      => $data['vm_role'],
            ]);
        }
    }
}
