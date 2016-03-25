@extends('default')

@section('content')
<div class="page-header">
	<h1>Apply Online</h1>
	<div class="headerdivider">
	</div>
</div>
<div class="row top30">
	<div class="col-md-12">
		<form class="form-horizontal">
			<fieldset>

			
			<div class="form-group">
			  <label class="col-md-4 control-label" for="textinput">Name</label>  
			  <div class="col-md-6">
			  	<input id="name" name="name" placeholder="Name" class="form-control input-md" type="text">
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="textinput">Contact Number</label>  
			  <div class="col-md-6">
			  	<input id="number" name="number" placeholder="Phone Number" class="form-control input-md" type="text">
			  </div>
			</div>

			

			<!-- Address -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="textarea">Address</label>
			  <div class="col-md-8">                     
			    <textarea class="form-control" cols="45" rows="4" id="address" name="address"></textarea>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="textinput">Select Course</label>  
			  <div class="col-md-6">
			  	<select class="form-control input-md">
			  		<option>Select Course</option>

			  	</select>
			  </div>
			</div>


			<div class="form-group">
			  <label class="col-md-4 control-label" for="textinput"></label>  
			  <div class="col-md-6">
			  	<input class="btn btn-success" type="submit" value="Apply">
			  </div>
			</div>

			</fieldset>
		</form>

	</div>
	
</div>
@stop