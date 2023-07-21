<?php

namespace Database\Seeders\Organization\Tenancy;

use App\Models\DataCenter\Organization\Tenancy\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payload = [
            [
                'name'            => 'Office HQ',
                'tenant_group_id' => 1,
                'description'     => null,
                'tags'            => null,
                'customer_id'     => null,
            ],
            [
                'name'            => 'Warehouse 01',
                'tenant_group_id' => 2,
                'description'     => null,
                'tags'            => null,
                'customer_id'     => null,
            ],
        ];

        foreach ($payload as $data) {
            Tenant::create([
                'app_token_id'    => 1,
                'name'            => $data['name'],
                'slug'            => Str::slug($data['name']),
                'tenant_group_id' => $data['tenant_group_id'],
                'description'     => null,
                'tags'            => null,
                'customer_id'     => null,
            ]);
        }
    }
}
