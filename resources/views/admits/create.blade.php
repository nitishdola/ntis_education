@extends('admin_default')

@section('content')
<div class="page-header">
	<h1>Add a admit</h1>
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
			@include('admits._form')
			<div class="control-group">
			  <label class="col-md-4 control-label" for="textinput"></label>  
			  <div class="controls">
			  	<input class="btn btn-success" type="submit" value="Add Admit">
			  </div>
			</div>

			</fieldset>
		{!! Form::close() !!}

	</div>
	
</div>
@stop
