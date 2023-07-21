<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\SoftwareCategory;
use Database\Seeders\Dcim\DeviceRoleSeeder;
use Database\Seeders\Dcim\ManufacturerSeeder;
use Database\Seeders\Dcim\PlatformSeeder;
use Database\Seeders\Organization\Tenancy\TenantGroupSeeder;
use Database\Seeders\Organization\Tenancy\TenantSeeder;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserTableSeeder::class,
            SoftwareCategorySeeder::class,
        ]);

        //Data Center
        $this->call([
            ManufacturerSeeder::class,
            DeviceRoleSeeder::class,
            PlatformSeeder::class,
            TenantSeeder::class,
            TenantGroupSeeder::class,
        ]);
    }
}
