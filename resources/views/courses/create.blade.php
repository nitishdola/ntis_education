@extends('admin_default')

@section('content')
<div class="page-header">
	<h1>Add a course</h1>
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

			
			<div class="control-group"> 
			  {!! Form::label('course_name', 'Course Name', array('class' => "col-md-4 control-label")) !!} 
			  <div class="controls">
			  	{!! Form::text('name', null, ['class' => 'form-control input-md', 'placeholder' => 'Enter Course name', 'autocomplete' => 'off',  'title' => 'Enter Course name','required' => 'true']) !!}
			  </div>
			</div>

			<div class="control-group">
			  {!! Form::label('course_code', 'Course Code', array('class' => "col-md-4 control-label")) !!}  
			  <div class="controls">
			  	{!! Form::text('code', null, ['class' => 'form-control input-md', 'placeholder' => 'Enter Course code', 'autocomplete' => 'off',  'title' => 'Enter Course code','required' => 'true']) !!}
			  </div>
			</div>

			<div class="control-group">
			  {!! Form::label('duration', 'Course Duration', array('class' => "col-md-4 control-label")) !!}  
			  <div class="controls">
			  	{!! Form::text('duration', null, ['class' => 'form-control input-md', 'placeholder' => 'Enter Course duration in months', 'autocomplete' => 'off',  'title' => 'Enter Course Duration in months','required' => 'true']) !!} 
			  </div>
			</div>

			<div class="control-group">
			  {!! Form::label('course_fee', 'Course Fee', array('class' => "col-md-4 control-label")) !!}  
			  <div class="controls">
			  	{!! Form::text('course_fee', null, ['class' => 'form-control input-md', 'placeholder' => 'Total Course Fee', 'autocomplete' => 'off',  'title' => 'Enter Course Fee','required' => 'true']) !!}
			  </div>
			</div>

			<div class="control-group">
			  {!! Form::label('admission_fee', 'Admission Fee', array('class' => "col-md-4 control-label")) !!}  
			  <div class="controls">
			  	{!! Form::text('admission_fee', null, ['class' => 'form-control input-md', 'placeholder' => 'Enter Admission Fee', 'autocomplete' => 'off',  'title' => 'Enter Admission Fee','required' => 'true']) !!}
			  </div>
			</div>



			<div class="control-group">
			  <label class="col-md-4 control-label" for="textinput"></label>  
			  <div class="controls">
			  	<input class="btn btn-success" type="submit" value="Add Course">
			  </div>
			</div>

			</fieldset>
		</form>

	</div>
	
</div>
@stop