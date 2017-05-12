<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Planet;

class EditController extends Controller
{
     public function index() {
          return view('planetarypages.edit');
     }
}
