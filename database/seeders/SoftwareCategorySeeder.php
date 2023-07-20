<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\SoftwareCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SoftwareCategorySeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents(database_path('apps.json'));
        $data = json_decode($json, true);

        foreach ($data as $categoryName => $services) {
            $category = SoftwareCategory::firstOrCreate([
                    'slug' => Str::slug($categoryName)
                ],
                [
                    'name' => $categoryName,
                ]
            );

            if (count($services) == 0) {
                continue;
            }

//            dd($services);

            foreach ($services as $serviceData) {

                $uniqueSlug = Str::slug($serviceData['name']);
                $counter = 1;
                while (Service::where('slug', $uniqueSlug)->exists()) {
                    // If the slug already exists, append the counter to make it unique
                    $uniqueSlug = Str::slug($serviceData['name']) . '-' . $counter;
                    $counter++;
                }

                // Append the unique slug to the service data
                $serviceData['slug'] = $uniqueSlug;

                $serviceData['software_category_id'] = $category->id;

                unset($serviceData['tags']);
//                dd($serviceData);

                // Create the service with the modified serviceData
                $category->services()->create($serviceData);
            }
        }
    }
}
