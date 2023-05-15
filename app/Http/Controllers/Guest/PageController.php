<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){

        $newDate = date('H:i:s', strtotime(' + 2 hours'));

        /*  commentato causa date dei treni
        $trains = Train::where('Data_di_partenza','>=', date("Y-m-d"))
        ->where('Orario_di_partenza','>=',$newDate)
        ->OrderBy('Orario_di_partenza')
        ->limit(10)->get();
        */

        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
