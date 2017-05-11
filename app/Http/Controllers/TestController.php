<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planet;

class TestController extends Controller
{
    public function index() {
         $results = Planet::all();
         dump($results->toArray());
    }
}
