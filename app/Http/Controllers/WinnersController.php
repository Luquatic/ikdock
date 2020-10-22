<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Winner;

class WinnersController extends Controller
{
    public function show($year){
      $winner = Winner::where('year','=',$year)->first();

      return response()->json([
        "winner" => $winner,
      ]);
    }
}
