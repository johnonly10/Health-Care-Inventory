<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $countryId = DB::table('countries')->WHERE('code', 'PH')->first()->id;

        $regions = [
            ['name' => 'National Capital Region', 'code' => 'NCR', 'slug' => 'national-capital-region', 'country_id' => $countryId],
            ['name' => 'Cordillera Administrative Region', 'code' => 'CAR', 'slug' => 'cordillera-administrative-region', 'country_id' => $countryId],
            ['name' => 'Region I', 'code' => 'REGION_I', 'slug' => 'region-i', 'country_id' => $countryId],
            ['name' => 'Region II', 'code' => 'REGION_II', 'slug' => 'region-ii', 'country_id' => $countryId],
            ['name' => 'Region III', 'code' => 'REGION_III', 'slug' => 'region-iii', 'country_id' => $countryId],
            ['name' => 'Region IV-A', 'code' => 'REGION_IV-A', 'slug' => 'region-iv-a', 'country_id' => $countryId],
            ['name' => 'Region IV-B', 'code' => 'REGION_IV-B', 'slug' => 'region-iv-b', 'country_id' => $countryId],
            ['name' => 'Region V', 'code' => 'REGION_V', 'slug' => 'region-v', 'country_id' => $countryId],
            ['name' => 'Region VI', 'code' => 'REGION_VI', 'slug' => 'region-vi', 'country_id' => $countryId],
            ['name' => 'Region VII', 'code' => 'REGION_VII', 'slug' => 'region-vii', 'country_id' => $countryId],
            ['name' => 'Region VIII', 'code' => 'REGION_VIII', 'slug' => 'region-viii', 'country_id' => $countryId],
            ['name' => 'Region IX', 'code' => 'REGION_IX', 'slug' => 'region-ix', 'country_id' => $countryId],
            ['name' => 'Region X', 'code' => 'REGION_X', 'slug' => 'region-x', 'country_id' => $countryId],
            ['name' => 'Region XI', 'code' => 'REGION_XI', 'slug' => 'region-xi', 'country_id' => $countryId],
            ['name' => 'Region XII', 'code' => 'REGION_XII', 'slug' => 'region-xii', 'country_id' => $countryId],
            ['name' => 'Region XIII', 'code' => 'REGION_XIII', 'slug' => 'region-xiii', 'country_id' => $countryId],
            ['name' => 'Bangsamoro Autonomous Region in Muslim Mindanao', 'code' => 'BARMM', 'slug' => 'bangsamoro-autonomous-region-in-muslim-mindanao', 'country_id' => $countryId],
        ];

        DB::table('regions')->insert($regions);
    }
}
