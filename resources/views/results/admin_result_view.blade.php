@extends('admin_default')

@section('content')

<div class="row top30">
<div id="json-overlay"></div>
	<div class="col-md-12">
		<div class="titleborder">
			<div>
				 <h3>Result for date <i>{{$exam_date}}</i> :(Admin View)</h3>
			</div>
		</div>
		<table class="table table-bordered" style="color:#343434" id="results">
		<thead>
		<tr>
			<th>#</th>
			<th>
				 Student Name
			</th>
			<th>
				S/O,D/O
			</th>
			
			<th>
				Roll Number
			</th>
			<th>
				Marks Obtained
			</th>
			<th>
				Course Name
			</th>
		</tr>
		</thead>
		<tbody>
		@foreach($res as $k => $r)
		<tr id="result_{{$r->resultid}}">
			<td>
				{{$k + 1}}
			</td>
			<td>
				 {{ucfirst($r->student_name)}}
			</td>
			<td>
				 {{ucfirst($r->parent_name)}}
			</td>
		
			<td>
				 {{$r->roll_number}}
			</td>
			<td>
				{{$r->marks_obtained}}
				
			</td>
			<td>
				{{$r->courseName}}
			</td>
			
		</tr>
		@endforeach
		
		</tbody>
		</table>
		<div class="break">

		</div>
	</div>
</div>

@stop