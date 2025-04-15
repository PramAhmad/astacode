<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // minimal s1
        // umur 20 tahun
        Criteria::create([
            'name' => 'Minimal S1',
        ]);
        Criteria::create([
            'name' => 'Umur 20 Tahun',
        ]);
    }
}
