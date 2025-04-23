<?php

namespace Database\Seeders;

use App\Models\ComponentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComponentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'CPU', 'code' => 'cpu'],
            ['name' => 'GPU', 'code' => 'gpu'],
            ['name' => 'RAM', 'code' => 'ram'],
            ['name' => 'Storage', 'code' => 'storage'],
            ['name' => 'Motherboard', 'code' => 'motherboard'],
            ['name' => 'PSU', 'code' => 'psu'],
            ['name' => 'Case', 'code' => 'case'],
            ['name' => 'Fan', 'code' => 'fan'],
        ];

        foreach ($types as $type) {
            ComponentType::updateOrCreate(
                ['code' => $type['code']],
                ['name' => $type['name']]
            );
        }
    }
}
