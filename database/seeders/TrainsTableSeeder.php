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
    public function run()
    {


        $csvContent = self::getCsvContent(__DIR__ . '/trains.csv');


        foreach ($csvContent as $index => $row){

            if ($index > 0){
                $newTrain = new Train();
                $newTrain->company =$row[0];
                $newTrain->departure_station =$row[1];
                $newTrain->arrival_station =$row[2];
                $newTrain->departure_time =$row[3];
                $newTrain->arrival_time =$row[4];
                $newTrain->train_code =$row[5];
                $newTrain->wagons_number =$row[6];
                $newTrain->on_time =$row[7];
                $newTrain->cancelled =$row[8];
                $newTrain->save();

            }
        }




        // for ($i = 0; $i < 100; $i++) {

        //     $train = new Train();

        //     $train->company = $faker->company();
        //     $train->departure_station = $faker->city();
        //     $train->arrival_station = $faker->city();
        //     $train->departure_time = $faker->dateTimeBetween('-3 months', '+6 months');
        //     $train->arrival_time = $faker->dateTimeBetween('-3 months', '+6 months');
        //     $train->train_code = $faker->randomDigitNotNull();
        //     $train->wagons_number = $faker->randomDigitNotNull();
        //     $train->on_time = $faker->boolean();
        //     $train->cancelled = $faker->boolean();
            


        //     $train->save();
        // }
    }

    public static function getCsvContent(string $path){

        $data = [];

        $file = fopen($path, 'r');

        if($file === false) {
            exit('file non valido');
            
        }
        while(($row = fgetcsv($file)) !== FALSE){
            
            $data[] = $row;

        }
        
        return $data;

    }
}
