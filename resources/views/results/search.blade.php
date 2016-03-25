@extends('default')

@section('content')
<div class="container courses-page">
    <div class="row ntis-page">
		<div class="page-header">
			<h2>Search Result</h2>
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

					
					<div class="form-group"> 
					  {!! Form::label('roll_number', 'Roll Number', array('class' => "col-md-4 control-label")) !!} 
					  <div class="col-md-6">
					  	{!! Form::text('roll_number', null, ['class' => 'form-control input-md', 'placeholder' => 'Roll Number', 'autocomplete' => 'off',  'title' => 'Enter Roll Number','required' => 'true']) !!}
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput"></label>  
					  <div class="col-md-6">
					  	<input class="btn btn-success" type="submit" value="Search">
					  </div>
					</div>

					</fieldset>
				</form>

			</div>
			
		</div>
	</div>
</div>
@stop