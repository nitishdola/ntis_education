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
				 <h3>Search Result</h3>
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
				 Pay Date
			</th>
			<th>
				Paid Amount
			</th>

			<th>
				Details
			</th>
		</tr>
		</thead>
		<tbody>
		@foreach($results as $k => $r)
		<tr>
			<td>
				{{ $k+1 }}
			</td>
			<td>
				{{$r->application['name']}}
			</td>
			<td>
				 {{$r->application['father_name']}}
			</td>
			<td>
				 {{$r->pay_date}}
			</td>
			<td>
				 {{$r->paid_amount}}
			</td>
		
			<td>
				 <a href="{{route('installment.view', $r->application['id'])}}"><i class="fa fa-pencil-square-o"></i>View All Installment Details</a>
			</td>
			
		</tr>
		@endforeach
		
		</tbody>
		</table>
			
		@else
		<div class="alert alert-warning">
		  <strong>Oops!</strong> No Results Found.
		</div>
		@endif
	</div>
</div>
@stop
