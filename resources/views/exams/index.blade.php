@extends('admin_default')

@section('content')

<div class="row top30">
<div id="json-overlay"></div>
	<div class="col-md-12">
		<div class="titleborder">
			<div>
				 <h1>View All Exams</h1>
			</div>
		</div>
		@if (session('status'))
		    {!! session('status') !!}
		@endif
		<table class="table table-bordered" style="color:#343434">
		<thead>
		<tr>
			<th>#</th>
			<th>
				Exam Date
			</th>
			<th>
				Admission Last  Date
			</th>
			<th>
				Total Marks
			</th>
			<th>
				Action
			</th>
			

		</tr>
		</thead>
		<tbody>
		@foreach($exams as $k => $r)
		<tr id="exam_{{$r->id}}">
			<td>
				{{$k + 1}}
			</td>
			<td>
				{{$r->name}}
			</td>
			<td>
				 {{$r->admission_last_date}}
			</td>
			<td>
				 {{$r->total_marks}}
			</td>
			
			<td>
				 <a href="{{route('exam_edit_path')}}/{{$r->id}}"><i class="fa fa-pencil-square-o"></i>Edit</a> 
				 <br><a href="{{route('exam_remove_path', $r->id)}}"  id="remove_exam" onclick="return confirm('Are you sure you want to delete this item?');")><i class="fa fa-times"></i>Remove</a> 
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
