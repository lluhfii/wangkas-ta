<?php

namespace Database\Seeders;

use App\Models\SchoolMajor;
use Illuminate\Database\Seeder;

class SchoolMajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = [
            0 => [
                'name' => 'Digital Marketing',
                'abbreviated_word' => 'DM'
            ],
            1 => [
                'name' => 'Pengembangan Perangkat Lunak',
                'abbreviated_word' => 'PPL'
            ],
            
        ];

        foreach ($majors as $major) {
            SchoolMajor::create([
                'name' => $major['name'],
                'abbreviated_word' => $major['abbreviated_word']
            ]);
        }
    }
}
