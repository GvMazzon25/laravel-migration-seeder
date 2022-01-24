<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    public function index() {
        $travel = Travel::all();

        return view('travel',$travel);
    }
}
