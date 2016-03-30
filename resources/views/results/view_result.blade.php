@extends('default')
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<style>
	.limited{
		font-family: 'Montserrat', sans-serif;
		color:#D2232A;
		font-weight: bold;
		font-size: 20px;
	}
</style>
@section('content')
<div class="container courses-page">
    <div class="row ntis-page">
		<div class="col-md-12">
			<div class="titleborder">
				<div>
					 <h3>Selection Test Result</h3>
				</div>
			</div>

			<?php if(!empty($res)) { ?>
			
			<div id="print">
				<div style="text-align:center; padding:2.5%;">

					
					<div class="col-md-12">
						<img src="{{URL::to('/')}}/public/img/ntis-logo-180x180.jpg" width="110" height="110" alt="NTIS education logo">
					</div>
					<div class="col-md-12">
						
						<h3>NTIS Selection Test Result</h3>
						<h5>Examination Date : {{date('d/m/Y', strtotime($res[0]->name))}}</h5>
						<h5>Limited Seats</h5>
						<h5 style="text-decoration:underline; font-weight:bold">Last Date of Admission : {{date('d/m/Y', strtotime($res[0]->admission_last_date))}}</h5>
					</div>
				</div>
					<style>
					table{
						color:#343434; font-size:12px;
						font-family: "Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif;
					}
					</style>
					<table class="table table-bordered pure-table pure-table-bordered">
					<thead>
						<tr>
							<th>
								 Student Name
							</th>
							<th>
								S/O, D/O
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
								Percentage
							</th>
							<th>
								Course
							</th>
							<th>
								Course Fees
							</th>

						</tr>
					</thead>
					<tbody>
					@foreach($res as $k => $r)
					<tr>
						<td>
							 {{$r->student_name}}
						</td>
						<td>
							 {{$r->parent_name}}
						</td>
						<td>
							 {{$r->centre}}
						</td>
						<td>
							 {{$r->roll_number}}
						</td>
						<td>
							{{$r->marks_obtained + 0}}/{{$r->total_marks}}
							
						</td>
						
						<td>
							{{($r->marks_obtained/$r->total_marks)*100}} %
							
						</td>
						<td>
							 {{$r->courseCode}}
						</td>
						<td>
							 {{$r->course_fee}}
						</td>
						
						
					</tr>
					@endforeach
					
					</tbody>
				</table>
			</div>
			<button onclick="PrintElem('#print')" class="btn btn-success"><i class="icon-white icon-print"></i> Print</button>

			<?php }else{ ?>


			    <div class="alert alert-danger fade in">

			        <a href="#" class="close" data-dismiss="alert">&times;</a>

			        <strong>Oops !</strong> No Results found for the roll number.

			    </div>



			<?php } ?>
		
			<div class="break">
				<script type="text/javascript">
			    function PrintElem(elem)
			    {
			        Popup($(elem).html());
			    }

			    function Popup(data) 
			    {

			    	var htmlToPrint = '' +
			        '<style type="text/css">' +
				'table{' +
			        'font-size:11px; color:#353535' +
			        '}' +
			        'thead{' +
			        'border-bottom:1px solid #ccc;' +
			        '}' +
			        '</style>';

			        var mywindow = window.open('', 'my div', 'height=400,width=600');
			        mywindow.document.write('<html><head><title></title>');
			        mywindow.document.write('<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css" type="text/css" />');

			        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
			      	mywindow.document.write(htmlToPrint);
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
			</div>
		</div>
	</div>
</div>
@stop
