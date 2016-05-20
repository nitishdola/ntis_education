<div class="col-md-6">
	<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
	  {!! Form::label('name', 'Full Name of the Applicant', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('name', null, ['class' => 'form-control input-md', 'placeholder' => 'Full Name of the Applicant', 'autocomplete' => 'off',  'title' => 'Full Name of the Applicant','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('father_name') ? 'has-error' : ''}}">
	  {!! Form::label('father_name', 'Father\'s Name', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('father_name', null, ['class' => 'form-control input-md', 'placeholder' => 'Father\'s Name of the Applicant', 'autocomplete' => 'off',  'title' => 'Father\'s Name of the Applicant','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('father_name', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('course_id') ? 'has-error' : ''}}">
		{!! Form::label('course_id', 'Course', array('class' => "col-md-4 control-label")) !!} 
	  	<div class="col-md-4">
			{!! Form::select('course_id', $courses, null, ['class' => 'form-control col-md-4', 'id' => 'course_id', 'required' => 'true']) !!}
		</div>
		<div class="col-md-2">
			{!! Form::text('duration', null, ['class' => 'disabled form-control input-md', 'id' => 'duration', 'required' => 'true', 'placeholder' => 'Duration', 'disabled' => true]) !!} Months
		</div>
		{!! $errors->first('course_id', '<span class="help-inline">:message</span>') !!}
	</div>


	<div class="form-group {{ $errors->has('center_name') ? 'has-error' : ''}}">
	  {!! Form::label('center_name', 'Center Name', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('center_name', null, ['class' => 'form-control input-md', 'placeholder' => 'center Name', 'autocomplete' => 'off',  'title' => 'Center Name','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('center_name', '<span class="help-inline">:message</span>') !!}
	</div>


	<div class="form-group {{ $errors->has('present_address') ? 'has-error' : ''}}">
	  {!! Form::label('present_address', 'Present Address', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::textarea('present_address', null, ['class' => 'form-control input-md', 'row' => 5, 'autocomplete' => 'off',  'title' => 'Present Address of the Applicant','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('present_address', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('pin') ? 'has-error' : ''}}">
	  {!! Form::label('pin', 'PIN Code', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('pin', null, ['class' => 'form-control input-md', 'placeholder' => 'PIN Code', 'autocomplete' => 'off',  'title' => 'PIN Code','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('pin', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('mobile_number') ? 'has-error' : ''}}">
		{!! Form::label('mobile_number', 'Mobile Number', array('class' => "col-md-4 control-label")) !!} 
		<div class="col-md-6">
			{!! Form::text('mobile_number', null, ['class' => 'form-control input-md', 'id' => 'mobile_number', 'required' => 'true', 'placeholder' => 'Mobile Number']) !!}
		</div>
		{!! $errors->first('mobile_number', '<span class="help-inline">:message</span>') !!}
	</div>


	<div class="form-group {{ $errors->has('permanent_address') ? 'has-error' : ''}}">
	  {!! Form::label('permanent_address', 'Permanent Address', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::textarea('permanent_address', null, ['class' => 'form-control input-md', 'row' => 5, 'autocomplete' => 'off',  'title' => 'Permanent Address of the Applicant','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('permanent_address', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('permanent_pin') ? 'has-error' : ''}}">
	  {!! Form::label('permanent_pin', 'PIN Code', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('permanent_pin', null, ['class' => 'form-control input-md', 'placeholder' => 'PIN Code', 'autocomplete' => 'off',  'title' => 'PIN Code','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('permanent_pin', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('permanent_mobile_number') ? 'has-error' : ''}}">
		{!! Form::label('permanent_mobile_number', 'Mobile Number', array('class' => "col-md-4 control-label")) !!} 
		<div class="col-md-6">
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
	<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
		{!! Form::label('category', 'Category', array('class' => "col-md-4 control-label")) !!} 
	  	<div class="col-md-6">
			{!! Form::select('category', $categories, null, ['class' => 'form-control input-md', 'id' => 'category', 'required' => 'true']) !!}
		</div>
		{!! $errors->first('category', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('dob') ? 'has-error' : ''}}">
		{!! Form::label('dob', 'Date of Birth', array('class' => "col-md-4 control-label")) !!} 
		<div class="col-md-6">
			{!! Form::text('dob', null, ['class' => 'date-pick-year form-control input-md', 'id' => 'dob', 'required' => 'true', 'placeholder' => 'Date of Birth']) !!}
		</div>
		{!! $errors->first('dob', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
		{!! Form::label('sex', 'Sex', array('class' => "col-md-4 control-label")) !!} 
		<label class="radio-inline"><input type="radio" name="sex" value="male">Male</label>
		<label class="radio-inline"><input type="radio" name="sex" value="female">Female</label>
		{!! $errors->first('sex', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('religion') ? 'has-error' : ''}}">
	  {!! Form::label('religion', 'Religion', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('religion', null, ['class' => 'form-control input-md', 'placeholder' => 'Religion', 'autocomplete' => 'off',  'title' => 'Religion','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('religion', '<span class="help-inline">:message</span>') !!}
	</div>
</div>

<div class="col-md-6">
	<div class="form-group {{ $errors->has('educational_qualification') ? 'has-error' : ''}}">
	  {!! Form::label('educational_qualification', 'Educational Qualification(Last Exmination)', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('educational_qualification', null, ['class' => 'form-control input-md', 'placeholder' => 'Educational Qualification(Last Exmination)', 'autocomplete' => 'off',  'title' => 'Educational Qualification','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('educational_qualification', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('year_of_passing') ? 'has-error' : ''}}">
		{!! Form::label('year_of_passing', 'Year of passing', array('class' => "col-md-4 control-label")) !!} 
		<div class="col-md-4">
			{!! Form::number('year_of_passing', null, ['class' => 'form-control input-md', 'id' => 'dob', 'required' => 'true', 'placeholder' => 'Year of passing']) !!}
		</div>
		{!! $errors->first('year_of_passing', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('board') ? 'has-error' : ''}}">
	  {!! Form::label('board', 'Board', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('board', null, ['class' => 'form-control input-md', 'placeholder' => 'Board', 'autocomplete' => 'off',  'title' => 'board','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('board', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('class') ? 'has-error' : ''}}">
	  {!! Form::label('class', 'Div/Class', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('class', null, ['class' => 'form-control input-md', 'placeholder' => 'Div/Class', 'autocomplete' => 'off',  'title' => 'Div/Class','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('class', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('major') ? 'has-error' : ''}}">
	  {!! Form::label('major', 'Major', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('major', null, ['class' => 'form-control input-md', 'placeholder' => 'major', 'autocomplete' => 'off',  'title' => 'major','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('major', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('stream') ? 'has-error' : ''}}">
		{!! Form::label('stream', 'Stream', array('class' => "col-md-4 control-label")) !!} 
		<label class="radio-inline"><input type="radio" name="stream" value="arts">Arts</label>
		<label class="radio-inline"><input type="radio" name="stream" value="science">Science</label>
		<label class="radio-inline"><input type="radio" name="stream" value="commerce">Commerce</label>
		{!! $errors->first('stream', '<span class="help-inline">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
	  {!! Form::label('photo', 'Upload Recent Photo', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::file('photo', null, ['class' => 'form-control input-md','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('photo', '<span class="help-inline">:message</span>') !!}
	</div>


	<div class="form-group {{ $errors->has('stream') ? 'has-error' : ''}}">
		{!! Form::label('apply_date', 'Apply Date', array('class' => "col-md-4 control-label")) !!} 
	  <div class="col-md-6">
	  	{!! Form::text('apply_date', null, ['class' => 'apply-date form-control input-md','required' => 'true']) !!}
	  </div>
	  {!! $errors->first('apply_date', '<span class="help-inline">:message</span>') !!}
	</div>
</div>