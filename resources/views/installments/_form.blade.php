<div class="control-group"> 
  {!! Form::label('sl_no', 'Sl Number', array('class' => "control-label")) !!} 
  <div class="controls">
  	{!! Form::select('sl_no', $applications, null, ['class' => 'form-control input-md', 'id' => 'application', 'autocomplete' => 'off',  'title' => 'Enter Certificate Serial Number','required' => 'true']) !!}
  </div>
</div>