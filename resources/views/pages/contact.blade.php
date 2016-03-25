@extends('default')

@section('content')
<div class="container courses-page">
    <div class="row ntis-page">
		<h2>Get in Touch</h2>
	</div>
	<div class="row top30">
		<div class="col-md-6">
			@if (session('status'))
			    <div class="alert alert-success fade in">

			        <a href="#" class="close" data-dismiss="alert">&times;</a>

			        {!! session('status') !!}

			    </div>
			@endif

			{!! Form::open(array('class' => "form-horizontal")) !!}
				<fieldset>

				
				<div class="form-group">
				  {!! Form::label('name', 'Name', array('class' => "col-md-4 control-label")) !!}  
				  <div class="col-md-6">
				  	{!! Form::text('name', null, ['class' => 'form-control input-md',  'placeholder' => 'Enter Name','autocomplete' => 'off',  'title' => 'Enter Name','required' => 'true']) !!}
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('Contact Number', 'Contact Number', array('class' => "col-md-4 control-label")) !!}  
				  <div class="col-md-6">
				  	{!! Form::text('number', null, ['class' => 'form-control input-md',  'placeholder' => 'Enter contact number','autocomplete' => 'off',  'title' => 'Enter number','required' => 'true']) !!}
				  </div>
				</div>

				<div class="form-group">
				  {!! Form::label('message', 'Message', array('class' => "col-md-4 control-label")) !!}  
				  <div class="col-md-8">
				  	{!! Form::textarea('message', null, ['class' => 'form-control input-md', 'rows' => 12, 'title' => 'Message','required' => 'true']) !!}
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput"></label>  
				  <div class="col-md-6">
				  	<input class="btn btn-success" type="submit" value="Submit">
				  </div>
				</div>

				</fieldset>
			{!! Form::close() !!}

		</div>
		<div class="col-md-6">
			<div class="box3">
				
				<i class="fa fa-map-marker"></i> Segunbari Manasha Mandir, Near B.E.D.College,<br>Fatashil Ambari, Guwahati
				<p>
				</p>
				<i class="fa fa-envelope"></i> &nbsp;<i>E-mail</i>: &nbsp;ntistechnology@gmail.com
				<p>
				<i class="fa fa-phone"></i> &nbsp;<i>Contact Number</i>: &nbsp;03621-282628
				</p>
			</div>
		</div>
	</div>
</div>
@stop
