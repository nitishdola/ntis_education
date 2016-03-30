<div class="control-group"> 
  {!! Form::label('title', 'Offer Title', array('class' => "control-label")) !!} 
  <div class="controls">
  	{!! Form::text('title', null, ['class' => 'span6 form-control input-md',  'placeholder' => 'Offer Title','autocomplete' => 'off',  'title' => 'Enter offer title','required' => 'true']) !!}
  </div>
</div>

<div class="control-group"> 
  {!! Form::label('image', 'Upload offer image', array('class' => "control-label")) !!} 
  <div class="controls">
    {!! Form::file('image', null, ['class' => 'form-control input-md', 'title' => 'Upload offer image','required' => 'true']) !!}
  </div>
</div>

<div class="control-group"> 
  {!! Form::label('description', 'Description', array('class' => "control-label")) !!} 
  <div class="controls">
    {!! Form::textarea('description', null, ['class' => 'span6 form-control input-md', 'title' => 'Description',]) !!}
  </div>
</div>
