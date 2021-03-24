@extends('master')
@section('content')
{{View::make('header')}}
<form action="" class="container col-sm-4 col-sm-offset-4">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div>
   
    <button type="submit" class="btn btn-default">Login</button>
</form>



{{View::make('footer')}}
@endsection
