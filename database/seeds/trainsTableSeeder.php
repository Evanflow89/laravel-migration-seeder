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
        $newTrain->azienda = $faker->word();
        $newTrain->stazione_di_partenza = $faker->city();
        $newTrain->stazione_di_arrivo = $faker->city();
        $newTrain->data_partenza = $faker->date();
        $newTrain->orario_partenza = $faker->time();
        $newTrain->orario_arrivo = $faker->time();
        $newTrain->codice_treno = rand(1000,9999);
        $newTrain->num_carrozze = rand(1,20);
        $newTrain->prezzo_biglietto = rand(1,99);
        $newTrain->save();
    }
}
