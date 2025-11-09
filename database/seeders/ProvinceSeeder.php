<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = DB::table('regions')->get()->keyby('code');

        $provinces = [
            // NCR
            ['name' => 'Metro Manila', 'code' => 'NCR', 'slug' => 'metro-manila', 'region_id' => $regions['NCR']->id],

            // CAR
            ['name' => 'Abra', 'code' => 'ABRA', 'slug' => 'abra', 'region_id' => $regions['CAR']->id],
            ['name' => 'Benguet', 'code' => 'BENGUET', 'slug' => 'benguet', 'region_id' => $regions['CAR']->id],
            ['name' => 'Ifugao', 'code' => 'IFUGAO', 'slug' => 'ifugao', 'region_id' => $regions['CAR']->id],
            ['name' => 'Kalinga', 'code' => 'KALINGA', 'slug' => 'kalinga', 'region_id' => $regions['CAR']->id],
            ['name' => 'Mountain Province', 'code' => 'MOUNTAIN_PROVINCE', 'slug' => 'mountain-province', 'region_id' => $regions['CAR']->id],
            ['name' => 'Apayao', 'code' => 'APAYAO', 'slug' => 'apayao', 'region_id' => $regions['CAR']->id],

            // Region I
            ['name' => 'Ilocos Norte', 'code' => 'ILOCOS_NORTE', 'slug' => 'ilocos-norte', 'region_id' => $regions['REGION_I']->id],
            ['name' => 'Ilocos Sur', 'code' => 'ILOCOS_SUR', 'slug' => 'ilocos-sur', 'region_id' => $regions['REGION_I']->id],
            ['name' => 'La Union', 'code' => 'LA_UNION', 'slug' => 'la-union', 'region_id' => $regions['REGION_I']->id],
            ['name' => 'Pangasinan', 'code' => 'PANGASINAN', 'slug' => 'pangasinan', 'region_id' => $regions['REGION_I']->id],

            // Region II
            ['name' => 'Cagayan', 'code' => 'CAGAYAN', 'slug' => 'cagayan', 'region_id' => $regions['REGION_II']->id],
            ['name' => 'Isabela', 'code' => 'ISABELA', 'slug' => 'isabela', 'region_id' => $regions['REGION_II']->id],
            ['name' => 'Nueva Vizcaya', 'code' => 'NUEVA_VIZCAYA', 'slug' => 'nueva-vizcaya', 'region_id' => $regions['REGION_II']->id],
            ['name' => 'Quirino', 'code' => 'QUIRINO', 'slug' => 'quirino', 'region_id' => $regions['REGION_II']->id],
            ['name' => 'Batanes', 'code' => 'BATANES', 'slug' => 'batanes', 'region_id' => $regions['REGION_II']->id],

            // Region III
            ['name' => 'Bulacan', 'code' => 'BULACAN', 'slug' => 'bulacan', 'region_id' => $regions['REGION_III']->id],
            ['name' => 'Pampanga', 'code' => 'PAMPANGA', 'slug' => 'pampanga', 'region_id' => $regions['REGION_III']->id],
            ['name' => 'Tarlac', 'code' => 'TARLAC', 'slug' => 'tarlac', 'region_id' => $regions['REGION_III']->id],
            ['name' => 'Nueva Ecija', 'code' => 'NUEVA_ECIJA', 'slug' => 'nueva-ecija', 'region_id' => $regions['REGION_III']->id],
            ['name' => 'Zambales', 'code' => 'ZAMBALES', 'slug' => 'zambales', 'region_id' => $regions['REGION_III']->id],
            ['name' => 'Bataan', 'code' => 'BATAAN', 'slug' => 'bataan', 'region_id' => $regions['REGION_III']->id],
            ['name' => 'Aurora', 'code' => 'AURORA', 'slug' => 'aurora', 'region_id' => $regions['REGION_III']->id],

            // Region IV-A
            ['name' => 'Cavite', 'code' => 'CAVITE', 'slug' => 'cavite', 'region_id' => $regions['REGION_IV-A']->id],
            ['name' => 'Laguna', 'code' => 'LAGUNA', 'slug' => 'laguna', 'region_id' => $regions['REGION_IV-A']->id],
            ['name' => 'Batangas', 'code' => 'BATANGAS', 'slug' => 'batangas', 'region_id' => $regions['REGION_IV-A']->id],
            ['name' => 'Rizal', 'code' => 'RIZAL', 'slug' => 'rizal', 'region_id' => $regions['REGION_IV-A']->id],
            ['name' => 'Quezon', 'code' => 'QUEZON', 'slug' => 'quezon', 'region_id' => $regions['REGION_IV-A']->id],

            // Region IV-B
            ['name' => 'Palawan', 'code' => 'PALAWAN', 'slug' => 'palawan', 'region_id' => $regions['REGION_IV-B']->id],
            ['name' => 'Marinduque', 'code' => 'MARINDUQUE', 'slug' => 'marinduque', 'region_id' => $regions['REGION_IV-B']->id],
            ['name' => 'Occidental Mindoro', 'code' => 'OCCIDENTAL_MINDORO', 'slug' => 'occidental-mindoro', 'region_id' => $regions['REGION_IV-B']->id],
            ['name' => 'Oriental Mindoro', 'code' => 'ORIENTAL_MINDORO', 'slug' => 'oriental-mindoro', 'region_id' => $regions['REGION_IV-B']->id],
            ['name' => 'Romblon', 'code' => 'ROMBLON', 'slug' => 'romblon', 'region_id' => $regions['REGION_IV-B']->id],

            // Region V
            ['name' => 'Camarines Sur', 'code' => 'CAMARINES_SUR', 'slug' => 'camarines-sur', 'region_id' => $regions['REGION_V']->id],
            ['name' => 'Camarines Norte', 'code' => 'CAMARINES_NORTE', 'slug' => 'camarines-norte', 'region_id' => $regions['REGION_V']->id],
            ['name' => 'Albay', 'code' => 'ALBAY', 'slug' => 'albay', 'region_id' => $regions['REGION_V']->id],
            ['name' => 'Catanduanes', 'code' => 'CATANDUANES', 'slug' => 'catanduanes', 'region_id' => $regions['REGION_V']->id],
            ['name' => 'Sorsogon', 'code' => 'SORSOGON', 'slug' => 'sorsogon', 'region_id' => $regions['REGION_V']->id],
            ['name' => 'Masbate', 'code' => 'MASBATE', 'slug' => 'masbate', 'region_id' => $regions['REGION_V']->id],

            // Region VI
            ['name' => 'Iloilo', 'code' => 'ILOILO', 'slug' => 'iloilo', 'region_id' => $regions['REGION_VI']->id],
            ['name' => 'Capiz', 'code' => 'CAPIZ', 'slug' => 'capiz', 'region_id' => $regions['REGION_VI']->id],
            ['name' => 'Aklan', 'code' => 'AKLAN', 'slug' => 'aklan', 'region_id' => $regions['REGION_VI']->id],
            ['name' => 'Antique', 'code' => 'ANTIQUE', 'slug' => 'antique', 'region_id' => $regions['REGION_VI']->id],
            ['name' => 'Guimaras', 'code' => 'GUIMARAS', 'slug' => 'guimaras', 'region_id' => $regions['REGION_VI']->id],
            ['name' => 'Negros Occidental', 'code' => 'NEGROS_OCCIDENTAL', 'slug' => 'negros-occidental', 'region_id' => $regions['REGION_VI']->id],

            // Region VII
            ['name' => 'Cebu', 'code' => 'CEBU', 'slug' => 'cebu', 'region_id' => $regions['REGION_VII']->id],
            ['name' => 'Bohol', 'code' => 'BOHOL', 'slug' => 'bohol', 'region_id' => $regions['REGION_VII']->id],
            ['name' => 'Negros Oriental', 'code' => 'NEGROS_ORIENTAL', 'slug' => 'negros-oriental', 'region_id' => $regions['REGION_VII']->id],
            ['name' => 'Siquijor', 'code' => 'SIQUIJOR', 'slug' => 'siquijor', 'region_id' => $regions['REGION_VII']->id],

            // Region VIII
            ['name' => 'Leyte', 'code' => 'LEYTE', 'slug' => 'leyte', 'region_id' => $regions['REGION_VIII']->id],
            ['name' => 'Samar', 'code' => 'SAMAR', 'slug' => 'samar', 'region_id' => $regions['REGION_VIII']->id],
            ['name' => 'Eastern Samar', 'code' => 'EASTERN_SAMAR', 'slug' => 'eastern-samar', 'region_id' => $regions['REGION_VIII']->id],
            ['name' => 'Northern Samar', 'code' => 'NORTHERN_SAMAR', 'slug' => 'northern-samar', 'region_id' => $regions['REGION_VIII']->id],
            ['name' => 'Southern Leyte', 'code' => 'SOUTHERN_LEYTE', 'slug' => 'southern-leyte', 'region_id' => $regions['REGION_VIII']->id],
            ['name' => 'Biliran', 'code' => 'BILIRAN', 'slug' => 'biliran', 'region_id' => $regions['REGION_VIII']->id],

            // Region IX
            ['name' => 'Zamboanga del Norte', 'code' => 'ZAMBOANGA_DEL_NORTE', 'slug' => 'zamboanga-del-norte', 'region_id' => $regions['REGION_IX']->id],
            ['name' => 'Zamboanga del Sur', 'code' => 'ZAMBOANGA_DEL_SUR', 'slug' => 'zamboanga-del-sur', 'region_id' => $regions['REGION_IX']->id],
            ['name' => 'Zamboanga Sibugay', 'code' => 'ZAMBOANGA_SIBUGAY', 'slug' => 'zamboanga-sibugay', 'region_id' => $regions['REGION_IX']->id],

            // Region X
            ['name' => 'Bukidnon', 'code' => 'BUKIDNON', 'slug' => 'bukidnon', 'region_id' => $regions['REGION_X']->id],
            ['name' => 'Misamis Oriental', 'code' => 'MISAMIS_ORIENTAL', 'slug' => 'misamis-oriental', 'region_id' => $regions['REGION_X']->id],
            ['name' => 'Misamis Occidental', 'code' => 'MISAMIS_OCCIDENTAL', 'slug' => 'misamis-occidental', 'region_id' => $regions['REGION_X']->id],
            ['name' => 'Lanao del Norte', 'code' => 'LANAO_DEL_NORTE', 'slug' => 'lanao-del-norte', 'region_id' => $regions['REGION_X']->id],
            ['name' => 'Camiguin', 'code' => 'CAMIGUIN', 'slug' => 'camiguin', 'region_id' => $regions['REGION_X']->id],

            // Region XI
            ['name' => 'Davao del Norte', 'code' => 'DAVAO_DEL_NORTE', 'slug' => 'davao-del-norte', 'region_id' => $regions['REGION_XI']->id],
            ['name' => 'Davao del Sur', 'code' => 'DAVAO_DEL_SUR', 'slug' => 'davao-del-sur', 'region_id' => $regions['REGION_XI']->id],
            ['name' => 'Davao Oriental', 'code' => 'DAVAO_ORIENTAL', 'slug' => 'davao-oriental', 'region_id' => $regions['REGION_XI']->id],
            ['name' => 'Davao de Oro', 'code' => 'DAVAO_DE_ORO', 'slug' => 'davao-de-oro', 'region_id' => $regions['REGION_XI']->id],
            ['name' => 'Davao Occidental', 'code' => 'DAVAO_OCCIDENTAL', 'slug' => 'davao-occidental', 'region_id' => $regions['REGION_XI']->id],

            // Region XII
            ['name' => 'South Cotabato', 'code' => 'SOUTH_COTABATO', 'slug' => 'south-cotabato', 'region_id' => $regions['REGION_XII']->id],
            ['name' => 'Sultan Kudarat', 'code' => 'SULTAN_KUDARAT', 'slug' => 'sultan-kudarat', 'region_id' => $regions['REGION_XII']->id],
            ['name' => 'North Cotabato', 'code' => 'NORTH_COTABATO', 'slug' => 'north-cotabato', 'region_id' => $regions['REGION_XII']->id],
            ['name' => 'Sarangani', 'code' => 'SARANGANI', 'slug' => 'sarangani', 'region_id' => $regions['REGION_XII']->id],

            // Region XIII
            ['name' => 'Agusan del Norte', 'code' => 'AGUSAN_DEL_NORTE', 'slug' => 'agusan-del-norte', 'region_id' => $regions['REGION_XIII']->id],
            ['name' => 'Agusan del Sur', 'code' => 'AGUSAN_DEL_SUR', 'slug' => 'agusan-del-sur', 'region_id' => $regions['REGION_XIII']->id],
            ['name' => 'Surigao del Norte', 'code' => 'SURIGAO_DEL_NORTE', 'slug' => 'surigao-del-norte', 'region_id' => $regions['REGION_XIII']->id],
            ['name' => 'Surigao del Sur', 'code' => 'SURIGAO_DEL_SUR', 'slug' => 'surigao-del-sur', 'region_id' => $regions['REGION_XIII']->id],
            ['name' => 'Dinagat Islands', 'code' => 'DINAGAT_ISLANDS', 'slug' => 'dinagat-islands', 'region_id' => $regions['REGION_XIII']->id],

            // BARMM
            ['name' => 'Maguindanao', 'code' => 'MAGUINDANAO', 'slug' => 'maguindanao', 'region_id' => $regions['BARMM']->id],
            ['name' => 'Lanao del Sur', 'code' => 'LANAO_DEL_SUR', 'slug' => 'lanao-del-sur', 'region_id' => $regions['BARMM']->id],
            ['name' => 'Basilan', 'code' => 'BASILAN', 'slug' => 'basilan', 'region_id' => $regions['BARMM']->id],
            ['name' => 'Sulu', 'code' => 'SULU', 'slug' => 'sulu', 'region_id' => $regions['BARMM']->id],
            ['name' => 'Tawi-Tawi', 'code' => 'TAWI_TAWI', 'slug' => 'tawi-tawi', 'region_id' => $regions['BARMM']->id],
        ];
        DB::table('provinces')->insert($provinces);
    }
}
