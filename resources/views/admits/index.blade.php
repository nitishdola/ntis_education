@extends('admin_default')

@section('content')

<div class="row top30">
<div id="json-overlay"></div>
@if (session('status'))
    {!! session('status') !!}
@endif
	<div class="col-md-12">
		<div class="titleborder" style="text-align:center">
			<div>
				 <h4>View All Admits</h4>
			</div>
		</div>
		<!--
		<div class="col-md-12" style="margin-bottom:15px">
			<div class="input-group">
			    <div class="col-md-3" style="margin-top:10px"><label>Filter </label></div>
			    <div class="col-md-9"><input id="filter" type="text" class="form-control" placeholder="Search record here..."></div>
			</div>
		</div>
		-->
		<?php  $count = 1; ?>
		<table class="table table-bordered" style="color:#343434;">
		<thead>
		<tr>
			<th>#</th>
			<th>
				Exam Date
			</th>
			<th>
				 Student Name
			</th>
			<th>
				Gender
			</th>
			<th>
				S/O, D/O
			</th>
			<th>
				Roll Number
			</th>
			<th>
				Centre of Examination
			</th>
			
			<th>
				Action
			</th>
			

		</tr>
		</thead>
		<tbody class="searchable">
		@foreach($admits as $k => $r)
		<tr id="admit_{{$r->id}}">
			<td>
				{{ (($admits->currentPage() - 1 ) * $admits->perPage() ) + $count + $k }}
			</td>
			<td>
				
				{{ date('F d, Y', strtotime($r->name)) }}
			</td>
			<td>
				 {{$r->student_name}}
			</td>
			<td>
				 {{$r->gender}}
			</td>
			<td>
				 {{$r->parent_name}}
			</td>
			<td>
				 {{$r->roll_number}}
			</td>
			<td>
				{{$r->centre}}
			</td>
			
			<td>
				 <a href="{{route('admit_edit_path')}}/{{$r->id}}"><i class="fa fa-pencil-square-o"></i>Edit</a> 
				 <br><a href="{{route('admit_remove_path', $r->id)}}" id="remove_admit" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-times"></i>Remove</a> 
			</td>
			
		</tr>
		@endforeach
		
		</tbody>
		</table>
		<div class="pagination">
		    <ul>
			    {!! str_replace('/?', '?',$admits->render()) !!}
			</ul>
		</div>
		<div class="break">
			<script>
			$(document).ready(function () {
				    (function ($) {

				        $('#filter').keyup(function () {

				            var rex = new RegExp($(this).val(), 'i');
				            $('.searchable tr').hide();
				            $('.searchable tr').filter(function () {
				                return rex.test($(this).text());
				            }).show();

				        })

				    }(jQuery));

				});
			</script>
		</div>
	</div>
</div>
@stop
