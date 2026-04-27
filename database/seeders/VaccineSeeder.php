<?php

namespace Database\Seeders;

use App\Models\Vaccine;
use Illuminate\Database\Seeder;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vaccines = [
            ['name' => 'BCG', 'target_age_months' => 0],
            ['name' => 'Hepatitis B (Dose 1)', 'target_age_months' => 0],

            ['name' => 'DTP (Dose 1)', 'target_age_months' => 2],
            ['name' => 'Polio (Dose 1)', 'target_age_months' => 2],
            ['name' => 'Hib (Dose 1)', 'target_age_months' => 2],
            ['name' => 'Hepatitis B (Dose 2)', 'target_age_months' => 2],
            ['name' => 'Pneumocoque (Dose 1)', 'target_age_months' => 2],

            ['name' => 'DTP (Dose 2)', 'target_age_months' => 3],
            ['name' => 'Polio (Dose 2)', 'target_age_months' => 3],
            ['name' => 'Hib (Dose 2)', 'target_age_months' => 3],
            ['name' => 'Hepatitis B (Dose 3)', 'target_age_months' => 3],
            ['name' => 'Pneumocoque (Dose 2)', 'target_age_months' => 3],

            ['name' => 'DTP (Dose 3)', 'target_age_months' => 4],
            ['name' => 'Polio (Dose 3)', 'target_age_months' => 4],
            ['name' => 'Hib (Dose 3)', 'target_age_months' => 4],
            ['name' => 'Hepatitis B (Dose 4)', 'target_age_months' => 4],
            ['name' => 'Pneumocoque (Dose 3)', 'target_age_months' => 4],

            ['name' => 'Rougeole', 'target_age_months' => 9],

            ['name' => 'ROR', 'target_age_months' => 12],

            ['name' => 'DTP (Rappel 1)', 'target_age_months' => 18],
            ['name' => 'Polio (Rappel 1)', 'target_age_months' => 18],

            ['name' => 'DTP (Rappel 2)', 'target_age_months' => 72],
            ['name' => 'Polio (Rappel 2)', 'target_age_months' => 72],
        ];

        foreach ($vaccines as $vaccine) {
            Vaccine::create($vaccine);
        }
    }
}
