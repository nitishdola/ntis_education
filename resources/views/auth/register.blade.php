@extends('default')

@section('content')

<div class="row">

<form method="POST" action="/auth/register" class="form-horizontal">
    {!! csrf_field() !!}
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Name</label> 
      <div class="col-md-6">
          <input type="text" class="form-control input-md" name="name" value="{{ old('name') }}">
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label> 
          <div class="col-md-6">
              <input type="email" class="form-control input-md" name="email" value="{{ old('email') }}">
          </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Password</label> 
          <div class="col-md-6">
              <input type="password" class="form-control input-md" name="password">
          </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Confirm Password</label> 
          <div class="col-md-6">
              <input type="password" class="form-control input-md" name="password_confirmation">
          </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"></label> 
          <div class="col-md-6">
              <button type="submit">Register</button>
          </div>
    </div>
</form>
</div>

@stop