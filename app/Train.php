<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Train;

class Train extends Model
{
    public function index() 
    {
  $trains = Train::all()
    }
}
