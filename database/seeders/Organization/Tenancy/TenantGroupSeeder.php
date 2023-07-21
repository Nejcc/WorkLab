<?php

namespace Database\Seeders\Organization\Tenancy;

use App\Models\DataCenter\Organization\Tenancy\TenantGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TenantGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payload = [
            [
                'name'        => 'Workshop',
                'parent_id'   => null,
                'description' => null,
            ],
            [
                'name'        => 'Customers',
                'parent_id'   => null,
                'description' => null,
            ],
        ];

        foreach ($payload as $data) {
            TenantGroup::create([
                'app_token_id' => 1,
                'name'         => $data['name'],
                'slug'         => Str::slug($data['name']),
                'parent_id'    => null,
                'description'  => null,
            ]);
        }
    }
}
