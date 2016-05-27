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
				 <h3>View All Branch Applications</h3>
			</div>
		</div>


		@if(count($results))
		<?php  $count = 1; ?>
		<table class="table table-bordered" style="color:#343434">
		<thead>
		<tr>
			<th>#</th>
			<th>
				 Student Name
			</th>
			<th>
				 Father Name
			</th>
			<th>
				 Address
			</th>
			<th>
				 PIN
			</th>
			<th>
				 Phone Number
			</th>
			<th>
				 Course Applied
			</th>
			<th>
				Branch Name
			</th>
			<th>
				Student Code
			</th>
			<th>
				Apply Date
			</th>
			<th>
				Details
			</th>
		</tr>
		</thead>
		<tbody>
		@foreach($results as $k => $r)
		<tr id="cert_{{$r->id}}">
			<td>
				{{ (($results->currentPage() - 1 ) * $results->perPage() ) + $count + $k }}
			</td>
			<td>
				{{$r->name}}
			</td>
			<td>
				{{$r->father_name}}
			</td>
			<td>
				{{$r->address}}
			</td>
			<td>
				{{$r->pin}}
			</td>
			<td>
				 {{$r->mobile_number}}
			</td>
			<td>
				 {{$r->course['name']}}
			</td>
			<td>
				 {{$r->branch_name}}
			</td>
			<td>
				 {{$r->student_code}}
			</td>
			<td>
				 {{$r->apply_date}}
			</td>
			<td>
				 <a target="_blank" href="{{ asset($r->form) }}"><i class="fa fa-pencil-square-o"></i>View Form</a>
			</td>

			<td>
				 <a href="{{ route('disable.branch.applications', $r->id) }}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i>Delete</a>
			</td>
			
		</tr>
		@endforeach
		
		</tbody>
		</table>
			<div class="pagination">
			    <ul>
				    {!! str_replace('/?', '?',$results->render()) !!}
				</ul>
			</div>
		@else
		<div class="alert alert-warning">
		  <strong>Oops!</strong> No Results Found.
		</div>
		@endif
	</div>
</div>
@stop
