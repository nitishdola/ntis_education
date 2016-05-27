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
					 <h3>Installment Result</h3>
				</div>
			</div>
			@if(!empty($branch_application))
			<?php if(count($results)) { ?>
			
			<div id="print">
				<div style="text-align:center; padding:2.5%;">
				
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
							<th>#</th>
							<th>
								Student Name
							</th>
							<th>
								S/O, D/O
							</th>
							
							<th>
								Student Code
							</th>
							
							<th>
								Paid Amount
							</th>
							<th>
								Pay Date
							</th>
						</tr>
					</thead>
					<tbody>
					<?php  $total = 0; ?>
					@foreach($results as $k => $r)
					<tr>
						<td> {{ $k+1 }} </td>
						<td>
							 {{$r->branch_application['name']}}
						</td>
						<td>
							 {{$r->branch_application['father_name']}}
						</td>
						
						<td>
							 {{$r->branch_application['student_code']}}
						</td>
						<td>
							{{$r->paid_amount}}
							
						</td>
						
						<td>
							{{ date('d/m/Y', strtotime($r->pay_date)) }}
							
						</td>
						<?php $total += $r->paid_amount; ?>
						
					</tr>
					@endforeach
					<tr style="font-weight:bold">
						<td></td>
						<td></td>
						<td></td>
						<td> Total Paaid </td>
						<td>
							 {{$total}}
						</td>
					</tr>
					</tbody>
				</table>
			</div>

			
			<button onclick="PrintElem('#print')" class="btn btn-success"><i class="icon-white icon-print"></i> Print</button>

			<?php }else{ ?>


			    <div class="alert alert-danger fade in">

			        <a href="#" class="close" data-dismiss="alert">&times;</a>

			        <strong>Oops !</strong> No Results found for the student code.

			        
			    </div>
			    <br>
			    <div class="col-md-2"> Name </div>
		        <div class="col-md-9"> {{ $branch_application->name }} </div>
		        <br><br>
		        <div class="col-md-2"> Father's Name </div>
		        <div class="col-md-9"> {{ $branch_application->father_name }} </div>
		        <br><br>
		        <div class="col-md-2"> Student Code </div>
		        <div class="col-md-9"> {{ $branch_application->student_code }} </div>
		        <br><br>

			<?php } ?>
			<a target="_blank" class="btn btn-info" href="{{ asset($branch_application->form) }}"><i class="fa fa-pencil-square-o"></i>View Your Form</a>
			<br><br>
			@else
			<div class="alert alert-danger fade in">

			        <a href="#" class="close" data-dismiss="alert">&times;</a>

			        <strong>Oops !</strong> No Results found for the student code.

			        
			    </div>
			@endif
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
