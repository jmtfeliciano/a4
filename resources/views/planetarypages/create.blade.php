@extends('layouts.master')

@section('purpose')
    Feed Us Data!
@endsection

@section('content')

     <h2>Please enter the data you want to contribute below:</h2><br>

     <!--  The form belong collects info about user's name and the selection
they prefered for behavior and photos-->


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method='POST' action='/submit'>
   {{ csrf_field() }}

   <label for='planetName'>Enter The Name Of the Planet (Letters and Numbers ONLY):</label>
   <input type='text' name='planetName' id='planetName'><br><br>

   <label for='galaxyName'>Which Galaxy Does It Belong To?</label>
       <select name='galaxyName' id='galaxyName'>
            <option value='Milky Way'>Milky Way</option>
            <option value='Andromeda'>Andromeda</option>
       </select><br><br>


   <input type='submit' class='btn btn-primary' value='Click to Contribute your Data!'>
   <br><br><br>

   <div class="alert alert-info">
        <strong>If your data is accepted:</strong> You will be directed to view all the data with your added data.
   </div>


</form>

@endsection
