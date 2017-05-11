@extends('layouts.master')

@section('purpose')
    View Existing Data!
@endsection

@section('content')
     <h3>You have chosen to view all our current data!</h3><br>

     <div class='planet'>
        @foreach($planets as $planet)
            <h4>{{ $planet->name }}, which is located in the {{ $planet->galaxies_name }} galaxy!</h4>
        @endforeach
   </div><br><br>

    <div class="alert alert-success">
         <strong>We are an open-source project!</strong> We need your help collecting and inputting data.
         Return to home and contribute to our data by updating, adding, and deleting data.
    </div>

@endsection('content')
