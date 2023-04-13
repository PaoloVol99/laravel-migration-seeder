<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $companies = ['trenitalia', 'italo', 'SBB CFF FFS', 'trenord', 'cotral'];
        
        for ($i = 0; $i < 110; $i++) {
            $departure_time = $faker->dateTimeBetween('-2 weeks', '+2 weeks');
            $arrival_time = $faker->dateTimeInInterval($departure_time, '+1 day');

            $new_train = new Train();
            $new_train->company = $faker->randomElement($companies);
            $new_train->departure_station = $faker->city();
            $new_train->destination_station = $faker->city();
            $new_train->departure_time = $departure_time;
            $new_train->arrival_time = $arrival_time;
            $new_train->train_code = $faker->bothify('#####');
            $new_train->carriages_number = $faker->numberBetween(6, 30);
            $new_train->on_time = $faker->randomElement([0, 1]);
            $new_train->canceled = $faker->randomElement([0, 1]);

            $new_train->save();
        }
    }
}
