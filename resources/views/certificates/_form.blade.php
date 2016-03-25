<div class="control-group"> 
  {!! Form::label('sl_no', 'Sl Number', array('class' => "control-label")) !!} 
  <div class="controls">
  	{!! Form::text('sl_no', null, ['class' => 'form-control input-md',  'placeholder' => 'Serial Number','autocomplete' => 'off',  'title' => 'Enter Certificate Serial Number','required' => 'true']) !!}
  </div>
</div>

<div class="control-group"> 
  {!! Form::label('student_name', 'Student Name', array('class' => "control-label")) !!} 
  <div class="controls">
  	{!! Form::text('student_name', null, ['class' => 'form-control input-md',  'placeholder' => 'Student Name','autocomplete' => 'off',  'title' => 'Enter Student Name','required' => 'true']) !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('registration_number', 'Registration Number', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::text('registration_number', null, ['class' => 'form-control ', 'placeholder' => 'Enter Registration Number', 'autocomplete' => 'off',  'title' => 'Enter registration number','required' => 'true']) !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('course_id', 'Course', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::select('course_id', $courses, null, ['class' => 'form-control input-md','required' => 'true']) !!} 
  </div>
</div>

<div class="control-group">
  {!! Form::label('from', 'From', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::text('from', null, ['class' => 'form-control input-md', 'placeholder' => 'From', 'autocomplete' => 'off',  'title' => 'From','required' => 'true']) !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('centre', 'Centre', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::text('centre', null, ['class' => 'form-control input-md', 'placeholder' => 'Enter Centre', 'autocomplete' => 'off',  'title' => 'Centre','required' => 'true']) !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('period_from', 'Period From', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::text('period_from', null, ['class' => 'datepicker form-control input-md', 'placeholder' => 'Enter period from', 'autocomplete' => 'off',  'title' => 'Period From','required' => 'true']) !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('period_to', 'Period To', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::text('period_to', null, ['class' => 'datepicker form-control input-md', 'placeholder' => 'Enter period to', 'autocomplete' => 'off',  'title' => 'Period From','required' => 'true']) !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('grade', 'Grade', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::text('grade', null, ['class' => 'form-control input-md', 'placeholder' => 'Enter Grade', 'autocomplete' => 'off',  'title' => 'Grade','required' => 'true']) !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('issue_date', 'Issue Date', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::text('issue_date', null, ['class' => 'datepicker form-control input-md',  'placeholder' => 'Issue date', 'autocomplete' => 'off',  'title' => 'Issue Date','required' => 'true']) !!}
  </div>
</div>