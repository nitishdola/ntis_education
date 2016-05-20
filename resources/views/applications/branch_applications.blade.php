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
				 {{$r->mobile_number}}
			</td>
			<td>
				 {{$r->course['name']}}
			</td>
			<td>
				 {{$r->educational_qualification}}
			</td>
			<td>
				 {{$r->year_of_passing}}
			</td>
			<td>
				 {{$r->major}}
			</td>
			<td>
				{{$r->class}}
			</td>
			<td>
				 <a href="{{route('application.view.print', $r->id)}}"><i class="fa fa-pencil-square-o"></i>Details/Print</a>
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
