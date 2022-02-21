<?php

use Faker\Generator as Faker;

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->words(2, true);
            $newTrain->departure_station = $faker->words(3, true);
            $newTrain->arrival_station = $faker->words(3, true);
            $newTrain->departure_at = $faker->time();
            $newTrain->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_at = $faker->time();
            $newTrain->arrival_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->train_code = $faker->numberBetween(1000, 9999);
            $newTrain->carriages = $faker->numberBetween(1, 99);
            $newTrain->on_time = $faker->boolean();
            $newTrain->canceled = $faker->boolean();

            $newTrain->save();

        }
    }
}
