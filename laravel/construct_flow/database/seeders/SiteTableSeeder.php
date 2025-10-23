<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class SiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sites = [
            [
                'site_code' => 'ST001',
                'name' => 'Campus - A',
                'city' => 'Breda',
                'country' => 'UK',
            ],
            [
                'site_code' => 'ST002',
                'name' => 'Residential Block – E',
                'city' => 'Den Haag',
                'country' => 'IT',
            ],
            [
                'site_code' => 'ST003',
                'name' => 'Industrial Lot – F',
                'city' => 'Utrecht',
                'country' => 'NL',
            ],
            [
                'site_code' => 'ST004',
                'name' => 'Residential Block – B',
                'city' => 'Groningen',
                'country' => 'BE',
            ],
            [
                'site_code' => 'ST005',
                'name' => 'Residential Block – A',
                'city' => 'Zwolle',
                'country' => 'UK',
            ],
            [
                'site_code' => 'ST006',
                'name' => 'Campus - F',
                'city' => 'Den Haag',
                'country' => 'DE',
            ],
            [
                'site_code' => 'ST007',
                'name' => 'Office Tower - C',
                'city' => 'Eindhoven',
                'country' => 'UK',
            ],
            [
                'site_code' => 'ST008',
                'name' => 'Residential Block – F',
                'city' => 'Utrecht',
                'country' => 'IT',
            ],
            [
                'site_code' => 'ST009',
                'name' => 'Residential Block – B',
                'city' => 'Breda',
                'country' => 'FR',
            ],
            [
                'site_code' => 'ST010',
                'name' => 'Industrial Lot – D',
                'city' => 'Zwolle',
                'country' => 'UK',
            ],

        ];
        DB::table('sites')->insert($sites);
    }
};
