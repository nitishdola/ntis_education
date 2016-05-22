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
				 <h3>View All Installments</h3>
				 <p> Student Name : {{ $info->name }} | Father's Name : {{ $info->father_name }} | Category : {{ $info->category }} </p>
			</div>
		</div>


		@if(count($results))
		<?php $total =  0; ?>
		<table class="table table-bordered" style="color:#343434">
		<thead>
		<tr>
			<th>#</th>
			<th>
				 Pay Date
			</th>
			<th>
				Amount Paid
			</th>
		</tr>
		</thead>
		<tbody>
		@foreach($results as $k => $r)
		<tr>
			<td> {{ $k+1 }} </td>
			<td>
				{{$r->pay_date}}
			</td>
			<td>
				{{$r->paid_amount}}
			</td>
		</tr>
		<?php $total += $r->paid_amount; ?>
		@endforeach
		<tr>
			<td></td>
			<td> <strong>Total Paid</strong> </td>
			<td> <strong>{{ $total }}</strong> </td>
		</tr>
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
