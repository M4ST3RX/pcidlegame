<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\Computer;
use App\Models\Rarity;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'TestUser',
            'email' => 'test@test.com',
            'password' => bcrypt('password')
        ]);

        $computer = Computer::create([
            'user_id' => $user->id
        ]);

        $epicRarity = Rarity::where('name', 'Epic')->first();
        $legendaryRarity = Rarity::where('name', 'Legendary')->first();

        $cpu = Component::create([
            'name' => 'Ryzen 7 5800X',
            'component_type_id' => 1, // CPU
            'rarity_id' => $epicRarity->id,
            'icon' => 'cpu_5800x.png',
            'rarity_class' => 'bg-purple-400/20',
        ]);

        $gpu = Component::create([
            'name' => 'RTX 3080',
            'component_type_id' => 2, // GPU
            'rarity_id' => $legendaryRarity->id,
            'icon' => 'gpu_3080.png',
            'rarity_class' => 'bg-yellow-400/20',
        ]);
    }
}
