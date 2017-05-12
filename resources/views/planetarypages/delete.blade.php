@extends('layouts.master')

@section('purpose')
   Delete Existing Data!
@endsection

@section('content')
     <h3>You have chosen to view delete data!</h3><br>


          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif


     <form method='POST' action='/todelete'>
          {{ csrf_field() }}
          <label for='planetName'>Name Of Planet to Delete (this is case-sensitive):</label>
          <input type='text' name='planetName' id='planetName'><br><br>

          <input type='submit' class='btn btn-primary' value='Attempt to Delete Data!'><br><br><br><br>
     </form>
     
     <div class="alert alert-info">
          <strong>If your deletion is accepted:</strong> You will be directed to view all the current data in the server but with your deleted data -- gone! Otherwise, you will be reverted back to this page.
     </div>


@endsection('content')
