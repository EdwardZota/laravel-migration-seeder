<?php

namespace App\Functions;

class Helpers {

    public static function getCsvContent(string $Path){

        $data = [];

        $document = fopen($Path,'r');

        if($document === false){
            exit('Documento richiesto non valido!');
        }

        while(($row = fgetcsv($document)) !== false){

            $data[] = $row;
        }

        return $data;

    }
}
