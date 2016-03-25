<div class="control-group"> 
	{!! Form::label('exam_id', 'Exam Date', array('class' => "col-md-4 control-label")) !!} 
	<div class="controls">
		{!! Form::select('exam_id', $exams, null, ['class' => 'form-control input-md','required' => 'true']) !!} 
	</div>
</div>


<div class="control-group"> 
	{!! Form::label('student_name', 'Student Name', array('class' => "col-md-4 control-label")) !!} 
	<div class="controls">
		{!! Form::text('student_name', null, ['class' => 'form-control input-md',  'placeholder' => 'Student Name','autocomplete' => 'off',  'title' => 'Enter Student Name','required' => 'true']) !!}
	</div>
</div>

<div class="control-group">
	{!! Form::label('gender', 'Gender' , array('class' => "col-md-4 control-label")) !!}
	<div class="form-inline">
	    <div class="radio">
	        {!! Form::radio('gender', 'male', true) !!}
	        {!! Form::label('male', 'Male') !!}
	    </div>
	    <div class="radio">
	        {!! Form::radio('gender', 'female') !!}
	        {!! Form::label('female', 'Female') !!}
	    </div>
	</div>
</div>

<div class="control-group"> 
	{!! Form::label('parent_name', 'S/O, D/O', array('class' => "col-md-4 control-label")) !!} 
	<div class="controls">
		
		{!! Form::text('parent_name', null, ['class' => 'form-control input-md',  'placeholder' => 'S/O, D/O','autocomplete' => 'off',  'title' => 'S/O, D/O','required' => 'true']) !!}
	</div>
</div>

<div class="control-group">
	{!! Form::label('roll_number', 'Roll Number', array('class' => "col-md-4 control-label")) !!}  
	<div class="controls">
		{!! Form::text('roll_number', null, ['class' => 'form-control ', 'placeholder' => 'Enter Roll Number', 'autocomplete' => 'off',  'title' => 'Enter Roll Number','required' => 'true']) !!}
	</div>
</div>

<div class="control-group">
	{!! Form::label('centre', 'Centre of Examinatio', array('class' => "col-md-4 control-label")) !!}  
	<div class="controls">
		{!! Form::text('centre', null, ['class' => 'form-control input-md', 'placeholder' => 'Enter examination center', 'autocomplete' => 'off',  'title' => 'examination center','required' => 'true']) !!}
	</div>
</div>