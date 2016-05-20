@extends('admin_default')

@section('content')
<div class="container courses-page">
    <div class="row ntis-page">
		<div class="page-header">
			<h2>Application Submit</h2>
			<div class="headerdivider">
			</div>
		</div>
		<div class="row top30">
			<div class="span12">
				@if (session('status'))
				    {!! session('status') !!}
				@endif
			</div>

			<div class="span12">
			{!! Form::open(array('class' => "form-horizontal", 'files' => true)) !!}
			<fieldset>
					<div class="span12">
						<div class="control-group {{ $errors->has('name') ? 'has-error' : ''}}">
						  {!! Form::label('name', 'Full Name of the Applicant', array('class' => "span3 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('name', null, ['class' => 'form-control input-md', 'placeholder' => 'Full Name of the Applicant', 'autocomplete' => 'off',  'title' => 'Full Name of the Applicant','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('father_name') ? 'has-error' : ''}}">
						  {!! Form::label('father_name', 'Father\'s Name', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('father_name', null, ['class' => 'form-control input-md', 'placeholder' => 'Father\'s Name of the Applicant', 'autocomplete' => 'off',  'title' => 'Father\'s Name of the Applicant','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('father_name', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('course_id') ? 'has-error' : ''}}">
							{!! Form::label('course_id', 'Course', array('class' => "span4 control-label")) !!} 
						  	<div class="span4">
								{!! Form::select('course_id', $courses, null, ['class' => 'form-control span4', 'id' => 'course_id', 'required' => 'true']) !!}
							</div>
							<div class="span2">
								{!! Form::text('duration', null, ['class' => 'disabled form-control input-md', 'id' => 'duration', 'required' => 'true', 'placeholder' => 'Duration', 'disabled' => true]) !!} Months
							</div>
							{!! $errors->first('course_id', '<span class="help-inline">:message</span>') !!}
						</div>


						<div class="control-group {{ $errors->has('center_name') ? 'has-error' : ''}}">
						  {!! Form::label('center_name', 'Center Name', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('center_name', null, ['class' => 'form-control input-md', 'placeholder' => 'center Name', 'autocomplete' => 'off',  'title' => 'Center Name','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('center_name', '<span class="help-inline">:message</span>') !!}
						</div>


						<div class="control-group {{ $errors->has('present_address') ? 'has-error' : ''}}">
						  {!! Form::label('present_address', 'Present Address', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::textarea('present_address', null, ['class' => 'form-control input-md', 'row' => 5, 'autocomplete' => 'off',  'title' => 'Present Address of the Applicant','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('present_address', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('pin') ? 'has-error' : ''}}">
						  {!! Form::label('pin', 'PIN Code', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('pin', null, ['class' => 'form-control input-md', 'placeholder' => 'PIN Code', 'autocomplete' => 'off',  'title' => 'PIN Code','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('pin', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('mobile_number') ? 'has-error' : ''}}">
							{!! Form::label('mobile_number', 'Mobile Number', array('class' => "span4 control-label")) !!} 
							<div class="span6">
								{!! Form::text('mobile_number', null, ['class' => 'form-control input-md', 'id' => 'mobile_number', 'required' => 'true', 'placeholder' => 'Mobile Number']) !!}
							</div>
							{!! $errors->first('mobile_number', '<span class="help-inline">:message</span>') !!}
						</div>


						<div class="control-group {{ $errors->has('permanent_address') ? 'has-error' : ''}}">
						  {!! Form::label('permanent_address', 'Permanent Address', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::textarea('permanent_address', null, ['class' => 'form-control input-md', 'row' => 5, 'autocomplete' => 'off',  'title' => 'Permanent Address of the Applicant','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('permanent_address', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('permanent_pin') ? 'has-error' : ''}}">
						  {!! Form::label('permanent_pin', 'PIN Code', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('permanent_pin', null, ['class' => 'form-control input-md', 'placeholder' => 'PIN Code', 'autocomplete' => 'off',  'title' => 'PIN Code','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('permanent_pin', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('permanent_mobile_number') ? 'has-error' : ''}}">
							{!! Form::label('permanent_mobile_number', 'Mobile Number', array('class' => "span4 control-label")) !!} 
							<div class="span6">
								{!! Form::text('permanent_mobile_number', null, ['class' => 'form-control input-md', 'id' => 'mobile_number', 'required' => 'true', 'placeholder' => 'Mobile Number']) !!}
							</div>
							{!! $errors->first('permanent_mobile_number', '<span class="help-inline">:message</span>') !!}
						</div>
						<?php
						$categories = [
							'' 			=> 'Select Category',
							'General' 	=> 'General',
							'OBC' 		=> 'OBC',
							'SC' 		=> 'SC',
							'ST' 		=> 'ST',
							'Others' 	=> 'Others',
						];
						?>
						<div class="control-group {{ $errors->has('category') ? 'has-error' : ''}}">
							{!! Form::label('category', 'Category', array('class' => "span4 control-label")) !!} 
						  	<div class="span6">
								{!! Form::select('category', $categories, null, ['class' => 'form-control input-md', 'id' => 'category', 'required' => 'true']) !!}
							</div>
							{!! $errors->first('category', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('dob') ? 'has-error' : ''}}">
							{!! Form::label('dob', 'Date of Birth', array('class' => "span4 control-label")) !!} 
							<div class="span6">
								{!! Form::text('dob', null, ['class' => 'date-pick-year form-control input-md', 'id' => 'dob', 'required' => 'true', 'placeholder' => 'Date of Birth']) !!}
							</div>
							{!! $errors->first('dob', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('sex') ? 'has-error' : ''}}">
							{!! Form::label('sex', 'Sex', array('class' => "span4 control-label")) !!} 
							<div class="controls">

							<label class="radio"><input type="radio" name="sex" value="male">Male</label>
							<label class="radio"><input type="radio" name="sex" value="female">Female</label>
							</div>
							{!! $errors->first('sex', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('religion') ? 'has-error' : ''}}">
						  {!! Form::label('religion', 'Religion', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('religion', null, ['class' => 'form-control input-md', 'placeholder' => 'Religion', 'autocomplete' => 'off',  'title' => 'Religion','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('religion', '<span class="help-inline">:message</span>') !!}
						</div>
					</div>

					<div class="span12">
						<div class="control-group {{ $errors->has('educational_qualification') ? 'has-error' : ''}}">
						  {!! Form::label('educational_qualification', 'Educational Qualification(Last Exmination)', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('educational_qualification', null, ['class' => 'form-control input-md', 'placeholder' => 'Educational Qualification(Last Exmination)', 'autocomplete' => 'off',  'title' => 'Educational Qualification','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('educational_qualification', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('year_of_passing') ? 'has-error' : ''}}">
							{!! Form::label('year_of_passing', 'Year of passing', array('class' => "span4 control-label")) !!} 
							<div class="span4">
								{!! Form::number('year_of_passing', null, ['class' => 'form-control input-md', 'id' => 'dob', 'required' => 'true', 'placeholder' => 'Year of passing']) !!}
							</div>
							{!! $errors->first('year_of_passing', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('board') ? 'has-error' : ''}}">
						  {!! Form::label('board', 'Board', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('board', null, ['class' => 'form-control input-md', 'placeholder' => 'Board', 'autocomplete' => 'off',  'title' => 'board','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('board', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('class') ? 'has-error' : ''}}">
						  {!! Form::label('class', 'Div/Class', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('class', null, ['class' => 'form-control input-md', 'placeholder' => 'Div/Class', 'autocomplete' => 'off',  'title' => 'Div/Class','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('class', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('major') ? 'has-error' : ''}}">
						  {!! Form::label('major', 'Major', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('major', null, ['class' => 'form-control input-md', 'placeholder' => 'major', 'autocomplete' => 'off',  'title' => 'major','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('major', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('stream') ? 'has-error' : ''}}">
							{!! Form::label('stream', 'Stream', array('class' => "span4 control-label")) !!} 
							

							<div class="controls">
								<label class="radio" for="radios-0"><input type="radio" name="stream" value="arts">Arts
								</label>
								<label class="radio" for="radios-1">
								  <input type="radio" name="stream" value="science">Science
								</label>

								<label class="radio" for="radios-1">
								  <input type="radio" name="stream" value="commerce">Commerce
								</label>
							</div>
							{!! $errors->first('stream', '<span class="help-inline">:message</span>') !!}


						</div>

						<div class="control-group {{ $errors->has('photo') ? 'has-error' : ''}}">
						  {!! Form::label('photo', 'Upload Recent Photo', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::file('photo', null, ['class' => 'form-control input-md','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('photo', '<span class="help-inline">:message</span>') !!}
						</div>


						<div class="control-group {{ $errors->has('stream') ? 'has-error' : ''}}">
							{!! Form::label('apply_date', 'Apply Date', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('apply_date', null, ['class' => 'apply-date form-control input-md','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('apply_date', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('code_number') ? 'has-error' : ''}}">
						  {!! Form::label('code_number', 'Code Number', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('code_number', null, ['class' => 'form-control input-md', 'placeholder' => 'Code Number', 'autocomplete' => 'off',  'title' => 'Code Number','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('code_number', '<span class="help-inline">:message</span>') !!}
						</div>

						

						<div class="control-group {{ $errors->has('center_code') ? 'has-error' : ''}}">
						  {!! Form::label('center_code', 'Center Code', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('center_code', null, ['class' => 'form-control input-md', 'placeholder' => 'center Code', 'autocomplete' => 'off',  'title' => 'Center Code','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('center_code', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('student_code') ? 'has-error' : ''}}">
						  {!! Form::label('student_code', 'Student Code', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('student_code', null, ['class' => 'form-control input-md', 'placeholder' => 'Student Code', 'autocomplete' => 'off',  'title' => 'Student Code','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('student_code', '<span class="help-inline">:message</span>') !!}
						</div>

						<div class="control-group {{ $errors->has('student_reg_number') ? 'has-error' : ''}}">
						  {!! Form::label('student_reg_number', 'Student Registration Number', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('student_reg_number', null, ['class' => 'form-control input-md', 'placeholder' => 'Student Registration Number', 'autocomplete' => 'off',  'title' => 'Student Registration Numbe','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('student_reg_number', '<span class="help-inline">:message</span>') !!}
						</div>


						<div class="control-group {{ $errors->has('verified_by') ? 'has-error' : ''}}">
						  {!! Form::label('verified_by', 'Verified By', array('class' => "span4 control-label")) !!} 
						  <div class="span6">
						  	{!! Form::text('verified_by', null, ['class' => 'form-control input-md', 'placeholder' => 'verified by', 'autocomplete' => 'off',  'title' => 'Verified By','required' => 'true']) !!}
						  </div>
						  {!! $errors->first('verified_by', '<span class="help-inline">:message</span>') !!}
						</div>
					</div>
					<div class="span2"></div><input class="btn btn-success" type="submit" value="Apply">

				</fieldset>
			{!! Form::close() !!}
			</div>
			
			
		</div>
	</div>
</div>
@stop

@section('Scripts')
<script>
	$('#course_id').change(function() {
		var course_id = $(this).val();
		if(course_id != '') {
			var data = '';
			data += '&course_id='+course_id;

			var url_to_call = '';
			url_to_call += "{{ URL::to('api-get-course-info')}}"; //console.log(url_to_call);
            //$.blockUI();
            $.ajax({
            	data : data,
            	url  : url_to_call,
            	type : 'GET',
            	dataType : "JSON",

                    error : function(resp) {
                        alert('Please try again !');
                       // $.unblockUI();
                    },

                    success : function(resp) {
                        //$.unblockUI();
                        if(jQuery.isEmptyObject(resp)) {
                            alert('No Course found !');
                        }else{
                            $('#duration').val(resp.duration);
                        }
                    }
            });
		}else{
			$('#duration').val('');
		}
	});
</script>
@stop