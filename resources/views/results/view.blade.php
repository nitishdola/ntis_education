@extends('admin_default')

@section('content')

<div class="row top30">
<div id="json-overlay"></div>
	<div class="col-md-12">
		<div class="titleborder">
			<div>
				 <h3>Result for date <i>{{$exam_date}}</i> :</h3>
			</div>
		</div>
		<?php  $count = 1; ?>
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
				Center
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
			<th>
				Course Fees
			</th>
			<th>
				Percentage
			</th>
			<th>
				Action
			</th>
		</tr>
		</thead>
		<tbody>
		@foreach($res as $k => $r)
		<tr id="result_{{$r->resultid}}">
			<td>
				{{ (($res->currentPage() - 1 ) * $res->perPage() ) + $count + $k }}
			</td>
			<td>
				 {{ucfirst($r->student_name)}}
			</td>
			<td>
				 {{ucfirst($r->parent_name)}}
			</td>
			<td>
				 {{$r->centre}}
			</td>
			<td>
				 {{$r->roll_number}}
			</td>
			<td>
				{{$r->marks_obtained}}/{{$r->total_marks}}
				
			</td>
			<td>
				{{$r->courseName}}
			</td>
			<td>
				 {{$r->course_fee}}
			</td>
			<td>
				<?php 
				$ttl = $r->total_marks;
				$mrk = $r->marks_obtained;
				$pc  = ($mrk / $ttl)*100;
				echo round($pc, 2);
				?>
				%
			</td>

			<td>
				 <a href="{{route('result_edit_path')}}/{{$r->resultid}}"><i class="fa fa-pencil-square-o"></i>Edit</a> 
				 <br><a href="{{route('result_remove_path', $r->id)}}"  id="remove_exam" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-times"></i>Remove</a> 
			</td>
			
		</tr>
		@endforeach
		
		</tbody>
		</table>
		<div class="pagination">
		    <ul>
			    {!! str_replace('/?', '?',$res->render()) !!}
			</ul>
		</div>
		<div class="break">

		</div>
	</div>
</div>
@stop