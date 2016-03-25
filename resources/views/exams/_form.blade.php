<div class="control-group"> 
  {!! Form::label('name', 'Exam Date', array('class' => "col-md-4 control-label")) !!} 
  <div class="controls">
  	{!! Form::text('name', null, ['class' => 'datepicker form-control input-md',  'placeholder' => 'Enter exam date','autocomplete' => 'off',  'title' => 'Enter exam date','required' => 'true']) !!}
  </div>
</div>

<div class="control-group"> 
  {!! Form::label('admission_last_date', 'Last Date of Admission', array('class' => "col-md-4 control-label")) !!} 
  <div class="controls">
  	{!! Form::text('admission_last_date', null, ['class' => 'datepicker form-control input-md',  'placeholder' => 'Last Date of Admission','autocomplete' => 'off',  'title' => 'Last Date of Admission','required' => 'true']) !!}
  </div>
</div>

<div class="control-group"> 
  {!! Form::label('total_marks', 'Total Marks', array('class' => "col-md-4 control-label")) !!} 
  <div class="controls">
  	{!! Form::text('total_marks', null, ['class' => 'form-control input-md',  'placeholder' => 'Enter marks','autocomplete' => 'off',  'title' => 'Enter marks','required' => 'true', 'type' => 'number']) !!}
  </div>
</div>