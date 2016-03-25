@extends('default')

@section('content')

<div class="row top30">
	<div class="col-md-12">
		<div class="titleborder">
			<div>
				 <h1>Track result</h1>
			</div>
		</div>
		<table class="table table-bordered" style="color:#343434">
		<thead>
		<tr>
			<th>#</th>
			<th>
				 Sl Number
			</th>
			<th>
				 Student Name
			</th>
			<th>
				 Registration Number
			</th>
			<th>
				 Course
			</th>
			<th>
				Grade
			</th>
			<th>
				Issue Date
			</th>
			<th>
				 Course Span
			</th>
			<th>
				 Period From
			</th>
			<th>
				 Period To
			</th>
			<th>
				From
			</th>
			<th>
				Centre
			</th>
			

		</tr>
		</thead>
		<tbody>
		@foreach($res as $k => $r)
		<tr>
			<td>
				{{$k + 1}}
			</td>
			<td>
				{{$r->sl_no}}
			</td>
			<td>
				 {{$r->student_name}}
			</td>
			<td>
				 {{$r->registration_number}}
			</td>
			<td>
				 {{$r->name}}({{$r->code}})
			</td>
			<td>
				 {{$r->grade}}
			</td>
			<td>
				<?php echo date('d/m/Y', strtotime($r->issue_date)); ?>
				
			</td>
			<td>
				 {{$r->duration}} Months
			</td>
			<td>
				<?php echo date('d/m/Y', strtotime($r->period_from)); ?>
				
			</td>
			<td>
				<?php echo date('d/m/Y', strtotime($r->period_to)); ?>
			</td>
			<td>
				 {{$r->from}}
			</td>
			<td>
				 {{$r->centre}}
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