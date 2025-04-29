<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Student::factory()->count(5)->create();

        Student::create([
            'name_ar' => 'admin',
            'name_en' => 'admin',
            'password' => bcrypt('123456'),
            'mobile' =>$faker->phoneNumber,
            'email'=>'admin@admin.com',
            'whatsapp'=>$faker->phoneNumber,
            'gender' =>'male',
            'freeze' =>'',
            'photo'=>'',
        ]);


    }
}
