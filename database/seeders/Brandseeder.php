<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'company_id'=>1,
            'generic_id'=>1,
            'name' => fake()->name(),
            'form' => 'tablate',
            'price' => 120,
            'strength' => '400mg',
            'packsize' => '20pcs',
            'order' => '10',
        ]);
    }
}
