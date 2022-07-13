<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index() 
    {
        $today = Carbon::today();
  $trains = Train::table('trains')->whereDate('data_partenza', '$today')->get();
dd($trains);
    }
}
