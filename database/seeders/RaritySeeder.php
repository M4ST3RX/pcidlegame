<?php

namespace Database\Seeders;

use App\Models\Rarity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rarities = [
            ['name' => 'Basic',    'code' => 'basic',    'color' => 'bg-gray-400/20'],
            ['name' => 'Improved', 'code' => 'improved', 'color' => 'bg-green-400/20'],
            ['name' => 'Advanced', 'code' => 'advanced', 'color' => 'bg-blue-400/20'],
            ['name' => 'Premium',  'code' => 'premium',  'color' => 'bg-purple-400/20'],
            ['name' => 'Elite',    'code' => 'elite',    'color' => 'bg-yellow-400/20'],
            ['name' => 'Ultra',    'code' => 'ultra',    'color' => 'bg-pink-400/20'],
        ];

        foreach ($rarities as $rarity) {
            Rarity::updateOrCreate(
                ['code' => $rarity['code']],
                [
                    'name' => $rarity['name'],
                    'color' => $rarity['color']
                ]
            );
        }
    }
}
