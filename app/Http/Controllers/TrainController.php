<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index() 
    {
        $trains = Train::where('data_partenza', date('Y-m-d'))->get();
return view('home', compact('trains'));
    }

    public function show($id)
    {
        $train = Train::findOrFail($id);

        return view('show', compact('train'));

    
    }
}
