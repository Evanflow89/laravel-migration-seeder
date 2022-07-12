<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Train;
use Carbon\Carbon;

class Train extends Model
{
    public function index() 
    {
        $date = Carbon::now()->format('Y-m-d');
  $trains = Train::whereDate('data_partenza', = $date)->get();
dd($trains);
    }
}
