<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();  
            $newTrain->departure_station = $faker->city();   
            $newTrain->arrival_station = $faker->city();  
            $newTrain->travel_day = $faker-> dateTimeBetween('now', '+1 week');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_number = $faker->numberBetween(0, 9999);
            $newTrain->carriages = $faker->numberBetween(1, 12);
            $newTrain->delay = $faker->randomElement([1, 0]);
            $newTrain->status = $faker->randomElement([1, 0]);

            $newTrain->save();
        }
    }
}
