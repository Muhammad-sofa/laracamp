<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit',
            ],

            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & 27-inch Retina Display',
            ],

            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program',
            ],

            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate',
            ],

            [
                'camp_id' => 1,
                'name' => 'Offline Courses Video',
            ],

            [
                'camp_id' => 1,
                'name' => 'Future Job Opportunity',
            ],

            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit',
            ],

            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program',
            ],

            [
                'camp_id' => 2,
                'name' => 'Final Project Certificate',
            ],

            [
                'camp_id' => 2,
                'name' => 'Offline Courses Video',
            ]
        ];

        CampBenefit::insert($campBenefits);
    }
}
