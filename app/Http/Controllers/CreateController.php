<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Planet;

class CreateController extends Controller
{
     public function index() {
          return view('planetarypages.create');
     }

     public function submit(Request $request) {

           $this->validate($request, ['planetName' => 'alpha_num']);

           $planet = new Planet();
           $planet->name = $request->planetName;
           $planet->galaxies_name = $request->galaxyName;
           $planet->save();

           return redirect('/view');

     }





}
