@extends('default')

@section('content')
<div class="container courses-page">
    <div class="row ntis-page">
		<h2>Track Student :</h2>
		<div class="headerdivider">
		</div>
	</div>
	<div class="row top30">
		<div class="col-md-12">
			@if (session('status'))
			    {!! session('status') !!}
			@endif

			{!! Form::open(array('class' => "form-horizontal")) !!}
				<fieldset>

				<div class="form-group">
				    {!! Form::label('option', 'Choose track By', array('class' => "col-md-4 control-label")) !!}  
				    <div class="form-inline">
				        <div class="radio">
				            {!! Form::radio('option', 'regno', true, ['id' => 'regno']) !!}
				            {!! Form::label('regno', 'Registration Number') !!}
				        </div>
				        <div class="radio">
				            {!! Form::radio('option', 'sname', false, ['id' => 'sname']) !!}
				            {!! Form::label('sname', 'Student Name') !!}
				        </div>
				    </div>
				</div>

				<div class="form-group" id="regNo">
				  {!! Form::label('regno', 'Registration Number', array('class' => "col-md-4 control-label")) !!}  
				  <div class="col-md-6">
				  	{!! Form::text('registration_number', null, ['class' => 'form-control input-md',  'placeholder' => 'Enter Registration Number','autocomplete' => 'off',  'title' => 'Enter Registration Number']) !!}
				  </div>
				</div>

				<div class="form-group" id="studentName" style="display:none">
				  {!! Form::label('name', 'Student Name', array('class' => "col-md-4 control-label")) !!}  
				  <div class="col-md-6">
				  	{!! Form::text('name', null, ['class' => 'form-control input-md',  'placeholder' => 'Enter students full name','autocomplete' => 'off',  'title' => 'Enter student name']) !!}
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput"></label>  
				  <div class="col-md-6">
				  	<input class="btn btn-success" type="submit" value="Track">
				  </div>
				</div>

				</fieldset>
			{!! Form::close() !!}

		</div>
	</div>
</div>
@stop

@section('page_scripts')
<script>
$('#regno').click(function() {
	$('#studentName').slideUp();
	$('#regNo').slideDown();
});	

$('#sname').click(function() {
	$('#regNo').slideUp();
	$('#studentName').slideDown();
});	
</script>
@stop