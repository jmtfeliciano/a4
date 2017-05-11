@extends('layouts.master')

@section('purpose')
    Open-source Planetary Database
@endsection

@section('content')
     <h3>Welcome to our Open-Source Solar System Planetary Database!</h3><br>

     <h4>We always find new celestial bodies -- planets and galaxies alike.<br>
           Moreover, celestial bodies like Pluto are constantly being reclassified. </h4><br><br>

     <h4>Indicate how you want to contribute to our Solar System database:</h4> <br><br>

     <div class="btn-group btn-group-lg">

          <a href="/view">
               <button type="button" class="btn btn-primary btn-block">View All Existing Planetary Data</button>
          </a>

          <a href="/create">
               <button type="button" class="btn btn-success btn-block">Create and New Planetary Data</button>
          </a>

          <a href="/edit">
               <button type="button" class="btn btn-warning btn-block">Update Current Data</button>
          </a>

          <a href="/delete">
               <button type="button" class="btn btn-danger btn-block">Delete Data</button>
          </a>
     </div>

@endsection
