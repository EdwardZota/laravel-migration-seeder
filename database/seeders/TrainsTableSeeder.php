<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvDocument = Helpers::getCsvContent(__DIR__ . '/trains.csv');

        foreach($csvDocument as $index => $value){
            if($index > 0 ){
                $train = new Train();
                $train->Azienda = $value[0];
                $train->Stazione_di_partenza = $value[1];
                $train->Stazione_di_arrivo = $value[2];
                $train->Data_di_partenza = date('Y-m-d',strtotime($value[3]));
                $train->Data_di_arrivo = date('Y-m-d',strtotime($value[3]));
                $train->Orario_di_partenza = date('H:i:s',strtotime($value[3]));
                $train->Orario_di_arrivo = date('H:i:s',strtotime($value[3]));
                $train->Codice_Treno = $value[5];
                $train->Numero_Carrozze = $value[6];
                $train->In_orario = $value[7];
                $train->Cancellato = $value[8];
                $train->save();
            }
        }

    }
}
