<?php

namespace App\Http\Controllers;
use App\Planet;

use Illuminate\Http\Request;

class ViewController extends Controller
{
     public function index() {
          $planets = Planet::all();
          return view('planetarypages.view')->with(['planets' => $planets]);
     }
}
