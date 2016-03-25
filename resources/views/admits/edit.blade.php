@extends('admin_default')

@section('content')
<div class="page-header">
	<h1>Edit admit</h1>
	<div class="headerdivider">
	</div>
</div>
<div class="row top30">
	<div class="col-md-12">
		@if (session('status'))
		    {!! session('status') !!}
		@endif

		
		{!!Form::model($admit, ['class' => "form-horizontal"])!!}
			<fieldset>
			@include('admits._form')
			<div class="form-group">
			  <label class="col-md-4 control-label" for="textinput"></label>  
			  <div class="col-md-6">
			  	<input class="btn btn-success" type="submit" value="Update">
			  </div>
			</div>

			</fieldset>
		{!! Form::close() !!}

	</div>
	
</div>
@stop
