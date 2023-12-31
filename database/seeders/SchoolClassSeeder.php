<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 4; $i++) {
            SchoolClass::create([
                'name' => 'Apprenticeship ' . $i
            ]);

            SchoolClass::create([
                'name' => 'Course ' . $i
            ]);

        }
    }
}
