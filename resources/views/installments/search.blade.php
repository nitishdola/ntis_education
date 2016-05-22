@extends('admin_default')

@section('content')


<div class="row top30">
<div id="json-overlay"></div>
@if (session('status'))
    {!! session('status') !!}
@endif
	<div class="col-md-12">
		<div class="titleborder">
			<div>
				 <h3>Search Installments</h3>
			</div>
		</div>

	</div>
</div>
<div class="row top30">
	<div class="col-md-12">
		@if (session('status'))
		    {!! session('status') !!}
		@endif

		{!! Form::open(array('method' => 'get', 'route' => 'installment.search_result', 'class' => "form-horizontal")) !!}
			<fieldset>
				<div class="control-group {{ $errors->has('application_id') ? 'has-error' : ''}}"> 
				  {!! Form::label('application_id', 'Select Student', array('class' => "control-label")) !!} 
				  <div class="controls">
				  	{!! Form::select('application_id', $applications, null, ['class' => ' form-control input-md', 'data-live-search' => "true", 'id' => 'applications', 'autocomplete' => 'off',  'title' => 'Select Student',]) !!}
				  </div>
				  {!! $errors->first('application_id', '<span class="help-inline">:message</span>') !!}
				</div>

				<div class="control-group {{ $errors->has('name') ? 'has-error' : ''}}"> 
				  {!! Form::label('name', 'Student Name', array('class' => "control-label")) !!} 
				  <div class="controls">
				  	{!! Form::text('name',  null, ['class' => ' form-control input-md','id' => 'applications', 'autocomplete' => 'off',  'title' => 'Student Name',]) !!}
				  </div>
				  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
				</div>

				<div class="control-group {{ $errors->has('pay_date_from') ? 'has-error' : ''}}"> 
					{!! Form::label('pay_date_from', 'Pay Date From', array('class' => "col-md-4 control-label")) !!} 
					<div class="controls">
						{!! Form::text('pay_date_from', null, ['class' => 'apply-date form-control input-md','autocomplete' => 'off',  'title' => 'Enter Pay Date From',]) !!}
					</div>
					{!! $errors->first('pay_date_from', '<span class="help-inline">:message</span>') !!}
				</div>

				<div class="control-group {{ $errors->has('pay_date_from') ? 'has-error' : ''}}"> 
					{!! Form::label('pay_date_to', 'Pay Date To', array('class' => "col-md-4 control-label")) !!} 
					<div class="controls">
						{!! Form::text('pay_date_to', null, ['class' => 'apply-date form-control input-md','autocomplete' => 'off',  'title' => 'Enter Pay Date From',]) !!}
					</div>
					{!! $errors->first('pay_date_to', '<span class="help-inline">:message</span>') !!}
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput"></label>  
				  <div class="col-md-6">
				  	<input class="btn btn-success" type="submit" value="Add Installment">
				  </div>
				</div>

			</fieldset>
		{!! Form::close() !!}

	</div>
	
</div>
@stop
