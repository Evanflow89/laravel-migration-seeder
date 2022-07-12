<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTrain = new Train();
        $newTrain->azienda = 
        $newTrain->save();
    }
}
