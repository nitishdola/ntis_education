<div class="control-group {{ $errors->has('application_id') ? 'has-error' : ''}}"> 
  {!! Form::label('application_id', 'Select Student', array('class' => "control-label")) !!} 
  <div class="controls">
  	{!! Form::select('application_id', $applications, null, ['class' => ' form-control input-md', 'data-live-search' => "true", 'id' => 'applications', 'autocomplete' => 'off',  'title' => 'Select Student','required' => 'true']) !!}
  </div>
  {!! $errors->first('application_id', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('paid_amount') ? 'has-error' : ''}}"> 
	{!! Form::label('paid_amount', 'Paid Amount', array('class' => "col-md-4 control-label")) !!} 
	<div class="controls">
		{!! Form::text('paid_amount', null, ['class' => 'form-control input-md',  'placeholder' => 'Enter Paid Amount','autocomplete' => 'off',  'title' => 'Enter Paid Amount','required' => 'true']) !!}
	</div>
	{!! $errors->first('paid_amount', '<span class="help-inline">:message</span>') !!}
</div>


<div class="control-group {{ $errors->has('pay_date') ? 'has-error' : ''}}"> 
	{!! Form::label('pay_date', 'Pay Date', array('class' => "col-md-4 control-label")) !!} 
	<div class="controls">
		{!! Form::text('pay_date', null, ['class' => 'apply-date form-control input-md',  'placeholder' => 'Enter Pay Date','autocomplete' => 'off',  'title' => 'Enter Pay Date','required' => 'true']) !!}
	</div>
	{!! $errors->first('pay_date', '<span class="help-inline">:message</span>') !!}
</div>