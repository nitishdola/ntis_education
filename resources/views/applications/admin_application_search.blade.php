@extends('admin_default')

@section('content')

<style>
	@media print {
    .myDivToPrint {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}

</style>
<div class="row top30">
	<div id="json-overlay"></div>
	@if (session('status'))
	    {!! session('status') !!}
	@endif
		<div class="span12">
			<div class="titleborder">
				<div>
					 <h3>Search Application</h3>
				</div>
			</div>

			{!! Form::open(array('route' => 'application.search.admin.result', 'method' => 'get', 'class' => "form-horizontal")) !!}
			<div class="control-group {{ $errors->has('code_number') ? 'has-error' : ''}}">
			  {!! Form::label('code_number', 'Code Number', array('class' => "span1 control-label")) !!} 
			  <div class="span6">
			  	{!! Form::text('code_number', null, ['class' => 'form-control input-md', 'placeholder' => 'Code Number', 'autocomplete' => 'off',  'title' => 'Code Number']) !!}
			  </div>
			  {!! $errors->first('code_number', '<span class="help-inline">:message</span>') !!}
			</div>

			<div class="control-group {{ $errors->has('center_code') ? 'has-error' : ''}}">
			  {!! Form::label('center_code', 'Center Code', array('class' => "span1 control-label")) !!} 
			  <div class="span6">
			  	{!! Form::text('center_code', null, ['class' => 'form-control input-md', 'placeholder' => 'Center Code', 'autocomplete' => 'off',  'title' => 'Center Code']) !!}
			  </div>
			  {!! $errors->first('center_code', '<span class="help-inline">:message</span>') !!}
			</div>

			<div class="control-group {{ $errors->has('student_code') ? 'has-error' : ''}}">
			  {!! Form::label('student_code', 'Student Code', array('class' => "span1 control-label")) !!} 
			  <div class="span6">
			  	{!! Form::text('student_code', null, ['class' => 'form-control input-md', 'placeholder' => 'Student Code', 'autocomplete' => 'off',  'title' => 'Student Code']) !!}
			  </div>
			  {!! $errors->first('student_code', '<span class="help-inline">:message</span>') !!}
			</div>

			<div class="control-group {{ $errors->has('code_number') ? 'has-error' : ''}}">
			  {!! Form::label('student_reg_number', 'Student registration Number', array('class' => "span1 control-label")) !!} 
			  <div class="span6">
			  	{!! Form::text('student_reg_number', null, ['class' => 'form-control input-md', 'placeholder' => 'Student registration Number', 'autocomplete' => 'off',  'title' => 'Student registration Number']) !!}
			  </div>
			  {!! $errors->first('student_reg_number', '<span class="help-inline">:message</span>') !!}
			</div>

			<div class="control-group">
			  <label class="col-md-4 control-label" for="textinput"></label>  
			  <div class="controls">
			  	<input class="btn btn-success" type="submit" value="Search">
			  </div>
			</div>

			</fieldset>
		{!! Form::close() !!}
	</div>
</div>

@stop
