<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train::where('Data_di_partenza','>=', date("Y-m-d"))
        ->where('Orario_di_partenza','>=',date("H:i:s"))
        ->OrderBy('Orario_di_partenza')
        ->limit(10)->get();

        return view('home', compact('trains'));
    }
}
