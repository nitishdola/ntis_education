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
				 <h1>View All Offers</h1>
			</div>
		</div>
		@if(count($results))
			<?php  $count = 1; ?>
			<table class="table table-bordered" style="color:#343434">
			<thead>
			<tr>
				<th>#</th>
				<th>
					 Title
				</th>
				<th>
					 Description
				</th>
				<th>
					Image
				</th>
				<th>
					Action
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
					 {{$r->title}}
				</td>
				<td>
					 {{$r->description}}
				</td>
				<td>
					 <img src="{{$r->image_url}}" width="200" height="200" />
				</td>
				
				<td>
					 <br><a href="{{route('offer_destroy_path', $r->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" id="remove_certificate"><i class="fa fa-times"></i>Remove</a> 
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
				    <div class="alert">
				      <button type="button" class="close" data-dismiss="alert">&times;</button>
				      <strong>Oops !</strong> No offers found !
				    </div>
			@endif
	</div>
</div>
@stop
