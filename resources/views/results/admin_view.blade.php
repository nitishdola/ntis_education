@extends('admin_default')

@section('content')
<div class="page-header">
	<h1>View result</h1>
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
			  {!! Form::label('exam_id', 'Select Exam Date', array('class' => "col-md-4 control-label")) !!} 
			  <div class="controls">
			  	{!! Form::select('exam_id', $exams, null, ['class' => 'form-control input-md','required' => 'true']) !!} 
			  </div>
			</div>
			<div class="control-group">
			  <label class="col-md-4 control-label" for="textinput"></label>  
			  <div class="controls">
			  	<input class="btn btn-success" type="submit" value="View Results">
			  </div>
			</div>

			</fieldset>
		{!! Form::close() !!}

	</div>
	
</div>
@stop
