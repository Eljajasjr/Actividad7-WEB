<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kits = ['StarterKit', 'Educational Robotics Kit', 'Kit5'];
    
        foreach ($kits as $kit) {
            RoboticsKit::firstOrCreate(['name' => $kit]);
        }
    }
}
