<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoboticsKit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    
    public function definition(): array {
        return [ 
            'course_key' => 'Rob' . fake()->unique()->numberBetween(100, 999),
            'course_name' => fake()->sentence(3),
            'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id,
            
            
   
        ];
    }
}
