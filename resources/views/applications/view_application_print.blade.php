@extends('admin_default')

@section('content')

<style>
	@media print {
    .myDivToPrint {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}

</style>
<div class="row top30">
<div id="json-overlay"></div>
@if (session('status'))
    {!! session('status') !!}
@endif
	<div class="span12">
		<div class="titleborder">
			<div>
				 <h3>View Application</h3>
			</div>
		</div>
		<div class="myDivToPrint" id="mydiv">
			<img src="{{asset($result->photo)}}" width="200" height="200" alt="Photo of {{$result->name}}" />
			<br><br>
			<table class="table table-bordered" style="color:#343434">

			<thead>
			<tr>
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
					Stream
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>
					{{$result->name}}
				</td>
				<td>
					 {{$result->mobile_number}}
				</td>
				<td>
					 {{$result->course['name']}}
				</td>
				<td>
					 {{$result->educational_qualification}}
				</td>
				<td>
					 {{$result->year_of_passing}}
				</td>
				<td>
					 {{$result->major}}
				</td>
				<td>
					{{$result->class}}
				</td>
				<td>
					{{$result->stream}}
				</td>
				
			</tr>
			</tbody>

			<thead>
			<tr>
				<th>
					 Father Name
				</th>
				<th>
					 Gender
				</th>
				<th>
					 Present Address
				</th>
				<th>
					PIN 
				</th>
				<th>
					Mobile Number
				</th>
				<th>
					 Permanent Address		
				</th>
				
				<th>
					Permanent PIN
				</th>

				<th>
					Permanent Mobile Number
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>
					{{$result->father_name}}
				</td>
				<td>
					 {{ ucfirst($result->sex) }}
				</td>
				<td>
					 {{$result->present_address }}
				</td>
				<td>
					 {{$result->pin}}
				</td>
				<td>
					 {{$result->mobile_number}}
				</td>
				<td>
					 {{$result->permanent_address}}
				</td>
				<td>
					{{$result->permanent_pin}}
				</td>
				<td>
					{{$result->permanent_mobile_number}}
				</td>
			</tr>
			</tbody>


			<thead>
			<tr>
				<th>
					 Category
				</th>
				<th>
					 DOB
				</th>
				<th>
					 Religion
				</th>
				<th>
					Code Number
				</th>

				<th>
					Center Name
				</th>

				<th>
					Center Code
				</th>
				

				<th>
					Student Code
				</th>
				
				<th>
					Student Registration Number
				</th>
				
				
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>
					{{$result->category}}
				</td>
				<td>
					 {{$result->dob}}
				</td>
				<td>
					 {{$result->religion}}
				</td>
				<td>
					{{$result->code_number}}
				</td>

				<td>
					{{$result->center_name}}
				</td>

				<td>
					{{$result->center_code}}
				</td>

				<td>
					{{$result->student_code}}
				</td>

				<td>
					{{$result->student_reg_number}}
				</td>
				
			</tr>
			</tbody>

			</table>

			<br>Apply Date : {{ date('d-m-Y', strtotime($result->apply_date))}} | Verified By : <strong> {{$result->verified_by}} </strong> <br><br>
		</div>
	</div>
</div>

<div class="row top30">
		
		<button class="btn btn-info" onclick="PrintElem('#mydiv')"><span class="glyphicon glyphicon-print"></span>Print</button>

		<a class="btn btn-danger" onclick="return confirm('Are You Sure ?');" href="{{ route('application.reject', $result->id) }}"><span class="glyphicon glyphicon-trash"></span>Remove Application</a>
</div>
@stop


@section('Scripts')
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
    	var bootstrap_path = "{{ asset('admin/css/bootstrap.css') }}";
        var mywindow = window.open('', 'NTIS-online-application-{{ $result->name }}', 'height=400,width=600');
        mywindow.document.write('<html><head><title>NTIS application - {{ $result->name }}</title>');
        mywindow.document.write('<link rel="stylesheet" href="'+bootstrap_path+'" type="text/css" />');
        mywindow.document.write('<style>html, table { font-size : 9px; }</style>');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
@stop
