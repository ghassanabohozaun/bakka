<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'name_ar' => $faker->name,
            'name_en' => $faker->name,
            'password' => bcrypt('123456'),
            'mobile' =>$faker->phoneNumber,
            'email'=>$faker->email,
            'whatsapp'=>$faker->phoneNumber,
            'gender' =>'male',
            'freeze' =>'',
            'photo'=>'',
        ];
    }
}
