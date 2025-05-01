<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();

        $title_ar = $faker->text(20);
        $title_en = $faker->text(20);

        return [
            'title_ar_slug' => slug($title_ar),
            'title_en_slug' => slug($title_en),
            'title_ar' => $title_ar,
            'title_en' => $title_en,
            'description_ar' => $faker->paragraph(5),
            'description_en' => $faker->paragraph(5),
            'hours' => $faker->numberBetween(1, 5),
            'cost' => $faker->numberBetween(100, 500),
            'discount' => $faker->numberBetween(1, 100),
            'zoom_link' => '',
            'language' => 'ar_en',
            'status' => 'on',
            'active' => 'on',
            'final_meeting' => '',
            'start_at' => '',
            'end_at' => '',
            'course_details' => '',
            'photo' => '',
        ];
    }
}
