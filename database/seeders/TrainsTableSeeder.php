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
        for ($i=0; $i<500; $i++){
            $train = new Train();
            $train->Azienda = $faker->company();
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->Data_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->Data_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->Orario_di_partenza = $faker->time();
            $train->Orario_di_arrivo = $faker->time();
            $train->Codice_Treno = $faker->lexify('??????????');
            $train->Numero_Carrozze = $faker->randomDigitNotNull();
            $train->In_orario = $faker->boolean();
            $train->Cancellato = $faker->boolean();
            $train->save();
        }
    }
}
