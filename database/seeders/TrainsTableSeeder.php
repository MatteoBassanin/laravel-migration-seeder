<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $train = new Train();

            $train->agency = $faker->company();
            $train->leaving_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->leaving_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->randomDigitNotNull();
            $train->wagon_number = $faker->randomDigitNotNull();
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->train_date = $faker->dateTimeBetween('-3 months', '+6 months');


            $train->save();
        }
    }
}
