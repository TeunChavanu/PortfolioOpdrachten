<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Projects = [
            [
                'project_code' => 'PRJ001',
                'name' => 'Skyline Towers',
                'status' => 'on_hold',
                'start_date' => '2023-01-15',
            ],
            [
                'project_code' => 'PRJ002',
                'name' => 'Greenfield Mall',
                'status' => 'cancelled',
                'start_date' => '2023-06-01',
            ],
            [
                'project_code' => 'PRJ003',
                'name' => 'Riverside Apartments',
                'status' => 'planned',
                'start_date' => '2022-11-20',
            ],
            [
                'project_code' => 'PRJ004',
                'name' => 'Sunset Villas',
                'status' => 'cancelled',
                'start_date' => '2021-05-10',
            ],
            [
                'project_code' => 'PRJ005',
                'name' => 'Downtown Office Park',
                'status' => 'completed',
                'start_date' => '2022-03-05',
            ],
            [
                'project_code' => 'PRJ006',
                'name' => 'Lakeside Resort',
                'status' => 'planned',
                'start_date' => '2023-02-28',
            ],
            [
                'project_code' => 'PRJ007',
                'name' => 'Mountainview Condos',
                'status' => 'on_hold',
                'start_date' => '2023-09-15',
            ],
            [
                'project_code' => 'PRJ008',
                'name' => 'Harborfront Plaza',
                'status' => 'planned',
                'start_date' => '2022-12-01',
            ],
            [
                'project_code' => 'PRJ009',
                'name' => 'Cedarwood Homes',
                'status' => 'cancelled',
                'start_date' => '2021-08-20',
            ],
            [
                'project_code' => 'PRJ010',
                'name' => 'Maple Street Renovation',
                'status' => 'cancelled',
                'start_date' => '2023-04-10',
            ]
        ];
        DB::table('projects')->insert($Projects);
    }
}
