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


<div class="control-group {{ $errors->has('branch_name') ? 'has-error' : ''}}">
  {!! Form::label('branch_name', 'Branch Name', array('class' => "span4 control-label")) !!} 
  <div class="span6">
  	{!! Form::text('branch_name', null, ['class' => 'form-control input-md', 'placeholder' => 'Branch Name', 'autocomplete' => 'off',  'title' => 'Branch Name','required' => 'true']) !!}
  </div>
  {!! $errors->first('branch_name', '<span class="help-inline">:message</span>') !!}
</div>


<div class="control-group {{ $errors->has('address') ? 'has-error' : ''}}">
  {!! Form::label('address', 'Address', array('class' => "span4 control-label")) !!} 
  <div class="span6">
  	{!! Form::textarea('address', null, ['class' => 'form-control input-md', 'row' => 10, 'autocomplete' => 'off',  'title' => ' Address of the Applicant','required' => 'true']) !!}
  </div>
  {!! $errors->first('address', '<span class="help-inline">:message</span>') !!}
</div>


<div class="control-group {{ $errors->has('dob') ? 'has-error' : ''}}">
	{!! Form::label('dob', 'Date of Birth', array('class' => "span4 control-label")) !!} 
	<div class="span6">
		{!! Form::text('dob', null, ['class' => 'date-pick-year form-control input-md', 'id' => 'dob', 'required' => 'true', 'placeholder' => 'Date of Birth']) !!}
	</div>
	{!! $errors->first('dob', '<span class="help-inline">:message</span>') !!}
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


<div class="control-group {{ $errors->has('stream') ? 'has-error' : ''}}">
	{!! Form::label('apply_date', 'Apply Date', array('class' => "span4 control-label")) !!} 
  <div class="span6">
  	{!! Form::text('apply_date', null, ['class' => 'apply-date form-control input-md','required' => 'true']) !!}
  </div>
  {!! $errors->first('apply_date', '<span class="help-inline">:message</span>') !!}
</div>


<div class="control-group {{ $errors->has('student_code') ? 'has-error' : ''}}">
  {!! Form::label('student_code', 'Student Code', array('class' => "span4 control-label")) !!} 
  <div class="span6">
  	{!! Form::text('student_code', null, ['class' => 'form-control input-md', 'placeholder' => 'Student Code', 'autocomplete' => 'off',  'title' => 'Student Code','required' => 'true']) !!}
  </div>
  {!! $errors->first('student_code', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('photo') ? 'has-error' : ''}}">
  {!! Form::label('form', 'Upload Form', array('class' => "span4 control-label")) !!} 
  <div class="span6">
  	{!! Form::file('form', null, ['class' => 'form-control input-md','required' => 'true']) !!}
  </div>
  {!! $errors->first('form', '<span class="help-inline">:message</span>') !!}
</div>
