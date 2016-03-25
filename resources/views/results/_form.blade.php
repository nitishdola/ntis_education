<div class="control-group"> 
  {!! Form::label('exam_id', 'Exam Date', array('class' => "col-md-4 control-label")) !!} 
  <div class="controls">
  	{!! Form::select('exam_id', $exams, null, ['class' => 'form-control input-md','required' => 'true']) !!} 
  </div>
</div>

<div class="control-group">
  {!! Form::label('roll_number', 'Roll Number', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::text('roll_number', null, ['class' => 'form-control ', 'placeholder' => 'Enter Roll Number', 'autocomplete' => 'off',  'title' => 'Enter Roll Number','required' => 'true']) !!}
  </div>
</div>

<div class="control-group"> 
  {!! Form::label('marks_obtained', 'Marks Obtained', array('class' => "col-md-4 control-label")) !!} 
  <div class="controls">
  	{!! Form::text('marks_obtained', null, ['class' => 'form-control input-md',  'placeholder' => 'Marks Obtained','autocomplete' => 'off',  'title' => 'Marks Obtained','required' => 'true']) !!}
  </div>
</div>

<div class="control-group"> 
  {!! Form::label('course_id', 'Course', array('class' => "col-md-4 control-label")) !!} 
  <div class="controls">
  	{!! Form::select('course_id', $courses, null, ['class' => 'form-control input-md','required' => 'true']) !!} 
  </div>
</div>

<div class="control-group">
  {!! Form::label('courseFee', 'Course Fees', array('class' => "col-md-4 control-label")) !!}  
  <div class="controls">
  	{!! Form::number('course_fee', null, ['class' => 'form-control ', 'step' => 'any', 'placeholder' => 'Enter Course Fees', 'autocomplete' => 'off',  'title' => 'Enter Course Fees','required' => 'true']) !!}
  </div>
</div>