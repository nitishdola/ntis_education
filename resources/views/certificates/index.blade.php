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
				 <h1>View All Certificates</h1>
			</div>
		</div>
		<?php  $count = 1; ?>
		<table class="table table-bordered" style="color:#343434">
		<thead>
		<tr>
			<th>#</th>
			<th>
				 Sl No
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
				 Course Span
			</th>
			<th>
				 Period
			</th>
			
			<th>
				From
			</th>
			<th>
				Centre
			</th>
			<th>
				Action
			</th>
			

		</tr>
		</thead>
		<tbody>
		@foreach($certificates as $k => $r)
		<tr id="cert_{{$r->id}}">
			<td>
				{{ (($certificates->currentPage() - 1 ) * $certificates->perPage() ) + $count + $k }}
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
				 {{$r->certificate->name}}({{$r->certificate->code}})
			</td>
			<td>
				 {{$r->grade}}
			</td>
			<td>
				 {{$r->certificate->duration}} Months
			</td>
			<td>
				<?php echo date('d/m/Y', strtotime($r->period_from)); ?> - <?php echo date('d/m/Y', strtotime($r->period_to)); ?>
				
			</td>
			<td>
				{{$r->from}}
			</td>
			<td>
				 {{$r->centre}}
			</td>
			<td>
				 <a href="{{route('certificate_edit_path')}}/{{$r->id}}"><i class="fa fa-pencil-square-o"></i>Edit</a> 
				 <br><a href="{{route('certificate_remove_path', $r->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" id="remove_certificate"><i class="fa fa-times"></i>Remove</a> 
			</td>
			
		</tr>
		@endforeach
		
		</tbody>
		</table>
			<div class="pagination">
			    <ul>
				    {!! str_replace('/?', '?',$certificates->render()) !!}
				</ul>
			</div>
	</div>
</div>
@stop
