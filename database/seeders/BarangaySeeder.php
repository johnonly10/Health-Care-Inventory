<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangaySeeder extends Seeder
{
    public function run()
    {
        $cities = DB::table('cities')->get()->keyBy('code');
        $barangays = [];

        $tanzaBarangays = [
            'Amaya',
            'Bagtas',
            'Barangay I',
            'Barangay II',
            'Barangay III',
            'Barangay IV',
            'Bihis',
            'Biwas',
            'Biga',
            'Bucal',
            'Bunga',
            'Calibuyo',
            'Capipisa',
            'Daang Amaya',
            'Halayhay',
            'Julugan',
            'Paradahan',
            'Punta',
            'Sahud Ulan',
            'Sanja Mayor',
            'Santol',
            'Tanauan',
            'Tres Cruses',
            'Lambingan',
            'Mulawin'
        ];
        foreach ($tanzaBarangays as $barangay) {
            $barangays[] = [
                'name' => $barangay,
                'code' => 'TANZA_' . strtoupper(str_replace(' ', '_', $barangay)),
                'slug' => 'tanza-' . strtolower(str_replace(' ', '-', $barangay)),
                'city_id' => $cities['CAV_TANZA']->id,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        // Manila Barangays (Sample districts)
        $manilaBarangays = [
            // Binondo
            'Barangay 293',
            'Barangay 294',
            'Barangay 295',
            // Ermita
            'Barangay 659',
            'Barangay 660',
            'Barangay 661',
            // Intramuros
            'Barangay 656',
            'Barangay 657',
            'Barangay 658',
            // Malate
            'Barangay 692',
            'Barangay 693',
            'Barangay 694',
            // Paco
            'Barangay 668',
            'Barangay 669',
            'Barangay 670',
            // Pandacan
            'Barangay 833',
            'Barangay 834',
            'Barangay 835',
            // Port Area
            'Barangay 649',
            'Barangay 650',
            'Barangay 651',
            // Quiapo
            'Barangay 306',
            'Barangay 307',
            'Barangay 308',
            // Sampaloc
            'Barangay 527',
            'Barangay 528',
            'Barangay 529',
            // San Andres
            'Barangay 699',
            'Barangay 700',
            'Barangay 701',
            // San Miguel
            'Barangay 637',
            'Barangay 638',
            'Barangay 639',
            // San Nicolas
            'Barangay 268',
            'Barangay 269',
            'Barangay 270',
            // Santa Ana
            'Barangay 872',
            'Barangay 873',
            'Barangay 874',
            // Santa Cruz
            'Barangay 299',
            'Barangay 300',
            'Barangay 301',
            // Santa Mesa
            'Barangay 591',
            'Barangay 592',
            'Barangay 593',
            // Tondo
            'Barangay 1',
            'Barangay 2',
            'Barangay 3'
        ];
        foreach ($manilaBarangays as $barangay) {
            $barangays[] = [
                'name' => $barangay,
                'code' => 'MANILA_' . strtoupper(str_replace(' ', '_', $barangay)),
                'slug' => 'manila-' . strtolower(str_replace(' ', '-', $barangay)),
                'city_id' => $cities['MANILA']->id,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        // Quezon City Barangays (Sample)
        $qcBarangays = [
            'Alicia',
            'Amihan',
            'Apolonio Samson',
            'Baesa',
            'Bagbag',
            'Bagong Pag-asa',
            'Bagong Silangan',
            'Bahay Toro',
            'Balingasa',
            'Balong-bato',
            'Batasan Hills',
            'Bayani',
            'Blue Ridge A',
            'Blue Ridge B',
            'Botocan',
            'Bungad',
            'Camp Aguinaldo',
            'Capri',
            'Central',
            'Claro',
            'Commonwealth',
            'Culiat',
            'Damar',
            'Damayan',
            'Damayan Lagi',
            'Damas',
            'Del Monte',
            'Dioquino Zobel',
            'Don Manuel',
            'Doña Aurora',
            'Doña Imelda',
            'Doña Josefa',
            'Duyan-duyan',
            'E. Rodriguez',
            'East Kamias',
            'Escopa I',
            'Escopa II',
            'Escopa III',
            'Escopa IV',
            'Fairview',
            'Greater Lagro',
            'Gulod',
            'Holy Spirit',
            'Horseshoe',
            'Immaculate Concepcion',
            'Kaligayahan',
            'Kalusugan',
            'Kamuning',
            'Katipunan',
            'Kaunlaran',
            'Kristong Hari',
            'Krus na Ligas',
            'Laging Handa',
            'Libis',
            'Lourdes',
            'Loyola Heights',
            'Maharlika',
            'Malaya',
            'Mangga',
            'Manresa',
            'Mariana',
            'Mariblo',
            'Marilag',
            'Masagana',
            'Masambong',
            'Matalahib',
            'Matandang Balara',
            'Milagrosa',
            'N.S. Amoranto',
            'Nayon Kaunlaran',
            'New Era',
            'North Fairview',
            'Novaliches Proper',
            'Obrero',
            'Old Capitol Site',
            'Paang Bundok',
            'Pag-ibig sa Nayon',
            'Paligsahan',
            'Paltok',
            'Pansol',
            'Paraiso',
            'Pasong Putik',
            'Pasong Tamo',
            'Payatas',
            'Phil-Am',
            'Pinyahan',
            'Project 6',
            'Quirino 2-A',
            'Quirino 2-B',
            'Quirino 2-C',
            'Quirino 3-A',
            'Ramon Magsaysay',
            'Roxas',
            'Sacred Heart',
            'Saint Ignatius',
            'Saint Peter',
            'Salvacion',
            'San Agustin',
            'San Antonio',
            'San Bartolome',
            'San Isidro',
            'San Isidro Labrador',
            'San Jose',
            'San Martin de Porres',
            'San Roque',
            'San Vicente',
            'Sangandaan',
            'Santa Cruz',
            'Santa Lucia',
            'Santa Monica',
            'Santa Teresita',
            'Santo Cristo',
            'Santo Domingo',
            'Sauyo',
            'Sienna',
            'Sikatuna Village',
            'Silangan',
            'Socorro',
            'South Triangle',
            'St. Ignatius',
            'Tagumpay',
            'Talayan',
            'Talipapa',
            'Tandang Sora',
            'Tatalon',
            'Teachers Village East',
            'Teachers Village West',
            'U.P. Campus',
            'U.P. Village',
            'Ugong Norte',
            'Unang Sigaw',
            'University Hills',
            'Valencia',
            'Vasra',
            'Veterans Village',
            'Villa Maria Clara',
            'West Kamias',
            'West Triangle',
            'White Plains'
        ];
        foreach ($qcBarangays as $barangay) {
            $barangays[] = [
                'name' => $barangay,
                'code' => 'QC_' . strtoupper(str_replace(' ', '_', $barangay)),
                'slug' => 'quezon-city-' . strtolower(str_replace(' ', '-', $barangay)),
                'city_id' => $cities['QUEZON_CITY']->id,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        // Continue this pattern for ALL cities in the Philippines...
        // This would include barangays for all 1,700+ cities/municipalities

        // Insert in chunks to avoid memory issues
        foreach (array_chunk($barangays, 100) as $chunk) {
            DB::table('barangays')->insert($chunk);
        }
    }
}
