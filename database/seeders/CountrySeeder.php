<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            [
                'name' => 'Philippines',
                'code' => 'PH',
                'slug' => 'Philippines',
                'created_at' => now(),
                'updated_by' => now(),
            ]
        ]);
    }
}
