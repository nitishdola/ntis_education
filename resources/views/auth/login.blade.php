@extends('default')

@section('content')
<div class="container courses-page">
  <div class="row ntis-page">
    <div class="page-header">
      <h2>Login</h2>
      <div class="headerdivider">
      </div>
    </div>

    <div class="row top30">
      <div class="col-md-12">
        <!-- Form -->
        {!! Form::open(array('class' => "form-horizontal")) !!}
          {!! csrf_field() !!}
          <!-- Form Group -->
          <div class="form-group">
            <!-- Label -->
            {!! Form::label('course_name', 'Email ID', array('class' => "col-sm-3 control-label")) !!} 
            <div class="col-sm-5">
              <!-- Input -->
              {!! Form::text('email', null, ['class' => 'form-control input-md', 'type' => 'email', 'placeholder' => 'Enter email id',  'title' => 'Enter email id','required' => 'true']) !!}
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('password', 'Password', array('class' => "col-sm-3 control-label")) !!} 
            <div class="col-sm-4">
              <input type="password" name="password" id="txtPassword" class="form-control" placeholder="Password" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <!-- Button -->
              {!! Form:: submit('Login', ['class' => 'btn btn-danger']) !!}
              {!! Form:: reset('Reset', ['class' => 'btn btn-success']) !!}
            </div>
          </div>
          <div class="col-sm-offset-3 col-sm-9">
            <!--<a href="#" class="black">Forgot Password ?</a>-->
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<br />
<hr />
@stop