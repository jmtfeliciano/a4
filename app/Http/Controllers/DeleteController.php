<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Planet;

class DeleteController extends Controller
{
     public function index() {
          return view('planetarypages.delete');
     }

     public function searchAndDelete(Request $request){

          $this->validate($request, ['planetName' => 'alpha_num']);


          $planet = Planet::find($request->planetName);


          if(!$planet){
               return redirect('/delete');
          }

          $planet->delete();

          return redirect('/view');

     }
}
