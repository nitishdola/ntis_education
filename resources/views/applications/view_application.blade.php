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
				 <h3>View Application</h3>
			</div>
		</div><br>
		<div class="row top30">
			<div class="span12"><strong>Center Name  - {{ $result->center_name }}</strong></div>
		</div> <br>
		<table class="table table-bordered" style="color:#343434">
		<thead>
		<tr>
			<th>
				 Student Name
			</th>
			<th>
				 Phone Number
			</th>
			<th>
				 Course Applied
			</th>
			<th>
				Educational Qualification
			</th>
			<th>
				Year of Passing
			</th>
			<th>
				 Major		
			</th>
			
			<th>
				Class
			</th>

			<th>
				Stream
			</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>
				{{$result->name}}
			</td>
			<td>
				 {{$result->mobile_number}}
			</td>
			<td>
				 {{$result->course['name']}}
			</td>
			<td>
				 {{$result->educational_qualification}}
			</td>
			<td>
				 {{$result->year_of_passing}}
			</td>
			<td>
				 {{$result->major}}
			</td>
			<td>
				{{$result->class}}
			</td>
			<td>
				{{$result->stream}}
			</td>
			
		</tr>
		</tbody>

		<thead>
		<tr>
			<th>
				 Father Name
			</th>
			<th>
				 Gender
			</th>
			<th>
				 Present Address
			</th>
			<th>
				PIN 
			</th>
			<th>
				Mobile Number
			</th>
			<th>
				 Permanent Address		
			</th>
			
			<th>
				Permanent PIN
			</th>

			<th>
				Permanent Mobile Number
			</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>
				{{$result->father_name}}
			</td>
			<td>
				 {{ ucfirst($result->sex) }}
			</td>
			<td>
				 {{$result->present_address }}
			</td>
			<td>
				 {{$result->pin}}
			</td>
			<td>
				 {{$result->mobile}}
			</td>
			<td>
				 {{$result->permanent_address}}
			</td>
			<td>
				{{$result->permanent_pin}}
			</td>
			<td>
				{{$result->permanent_mobile_number}}
			</td>
		</tr>
		</tbody>


		<thead>
		<tr>
			<th>
				 Category
			</th>
			<th>
				 DOB
			</th>
			<th>
				 Religion
			</th>
			<th>
				Photo
			</th>
			
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>
				{{$result->category}}
			</td>
			<td>
				 {{$result->dob}}
			</td>
			<td>
				 {{$result->religion}}
			</td>
			<td>
				<a href="{{asset($result->photo)}}" title="Photo of {{$result->name}}" target="_blank"> <img src="{{asset($result->photo)}}" width="200" height="200" alt="Photo of {{$result->name}}" /> </a>

				 <br><a href="{{asset($result->photo)}}"  target="_blank" title="Photo of {{$result->name}}"> View Full Image </a>
			</td>
			
		</tr>
		</tbody>

		</table>
	</div>
</div>


<div class="row top30">
	
	{!! Form::open(array('class' => "form-horizontal", 'route' => 'application.process')) !!}
	<fieldset>
		<div class="control-group {{ $errors->has('code_number') ? 'has-error' : ''}}">
		  {!! Form::label('code_number', 'Code Number', array('class' => "span4 control-label")) !!} 
		  <div class="span6">
		  	{!! Form::text('code_number', null, ['class' => 'form-control input-md', 'placeholder' => 'Code Number', 'autocomplete' => 'off',  'title' => 'Code Number','required' => 'true']) !!}
		  </div>
		  {!! $errors->first('code_number', '<span class="help-inline">:message</span>') !!}
		</div>

		

		<div class="control-group {{ $errors->has('center_code') ? 'has-error' : ''}}">
		  {!! Form::label('center_code', 'Center Code', array('class' => "span4 control-label")) !!} 
		  <div class="span6">
		  	{!! Form::text('center_code', null, ['class' => 'form-control input-md', 'placeholder' => 'center Code', 'autocomplete' => 'off',  'title' => 'Center Code','required' => 'true']) !!}
		  </div>
		  {!! $errors->first('center_code', '<span class="help-inline">:message</span>') !!}
		</div>

		<div class="control-group {{ $errors->has('student_code') ? 'has-error' : ''}}">
		  {!! Form::label('student_code', 'Student Code', array('class' => "span4 control-label")) !!} 
		  <div class="span6">
		  	{!! Form::text('student_code', null, ['class' => 'form-control input-md', 'placeholder' => 'Student Code', 'autocomplete' => 'off',  'title' => 'Student Code','required' => 'true']) !!}
		  </div>
		  {!! $errors->first('student_code', '<span class="help-inline">:message</span>') !!}
		</div>

		<div class="control-group {{ $errors->has('student_reg_number') ? 'has-error' : ''}}">
		  {!! Form::label('student_reg_number', 'Student Registration Number', array('class' => "span4 control-label")) !!} 
		  <div class="span6">
		  	{!! Form::text('student_reg_number', null, ['class' => 'form-control input-md', 'placeholder' => 'Student Registration Number', 'autocomplete' => 'off',  'title' => 'Student Registration Numbe','required' => 'true']) !!}
		  </div>
		  {!! $errors->first('student_reg_number', '<span class="help-inline">:message</span>') !!}
		</div>


		<div class="control-group {{ $errors->has('verified_by') ? 'has-error' : ''}}">
		  {!! Form::label('verified_by', 'Verified By', array('class' => "span4 control-label")) !!} 
		  <div class="span6">
		  	{!! Form::text('verified_by', null, ['class' => 'form-control input-md', 'placeholder' => 'verified by', 'autocomplete' => 'off',  'title' => 'Verified By','required' => 'true']) !!}
		  </div>
		  {!! $errors->first('verified_by', '<span class="help-inline">:message</span>') !!}
		</div>

		{!! Form::hidden('id', $id) !!}

		<div class="control-group">
			<div class="span2"></div>
			<div class="span4"><input class="btn btn-success" type="submit" value="Process"></div>
		</div>

	</fieldset>
	{!! Form::close() !!}
</div>
@stop
