@extends('default')

@section('content')
<div class="container courses-page">
    <div class="row ntis-page">
		<div class="col-md-12">
			<h2>{{$info['name']}}</h2>
		</div>
	</div>

	<div class="row course-basic-details">
		<div class="col-md-6 col-md-offset-3">
			<div class="col-md-5">
				Duration :
			</div>

			<div class="col-md-7">
			{{$info['duration']}} months
			</div>

			<div class="col-md-5">
				Total Course Fee :
			</div>

			<div class="col-md-7">
			{{$info['course_fee']}}
			</div>

			<div class="col-md-5">
				Admission Fees :
			</div>

			<div class="col-md-7">
			{{$info['admission_fee']}}
			</div>

			<div class="col-md-5">
				Installment :
			</div>

			<div class="col-md-7">
			<?php 
			$fee 	= $info['course_fee'] - $info['admission_fee'];
			$inst 	= $fee/$info['duration'];
			?>
			<?php echo $inst; ?>/- X {{$info['duration']}}(Months) = <?php echo $fee; ?>/-
			</div>

		</div>

	</div>


	<div class="row text-center intro">
		<div class="col-md-12">
			<h2 style="text-decoration:underline">Course Module</h2>
		</div>
	</div>

	<div class="row course-syll">

		<div class="col-md-10 col-md-offset-1">
			<h3 style="text-decoration:underline">1st Semester</h3>
			<h4><i class="fa fa-check-circle"></i> Fundamentals of Computer Hardware</h4>
			<h4><i class="fa fa-check-circle"></i> Bilinguals Package(Assamese,Bengali,Hindi, Bodo etc)</h4>
			<h4><i class="fa fa-check-circle"></i> Web Page Designing (HTML, DHTML & Front Page)</h4>
			<h4><i class="fa fa-check-circle"></i> Financial Accounting using Trade Easy, Tally(6.3/7.2,9.0 etc)</h4>
			<h4><i class="fa fa-check-circle"></i> Concept on multimedia and E-commerce</h4>
			<h4><i class="fa fa-check-circle"></i> Internet Browsing,Downloading & Email Handling</h4>
		</div>

		<div class="col-md-10 col-md-offset-1">
			<h3 style="text-decoration:underline">2nd Semester</h3>
			<h4><i class="fa fa-check-circle"></i> Programming in C</h4>
			<h4><i class="fa fa-check-circle"></i> Programming in C++</h4>
			<h4><i class="fa fa-check-circle"></i> Database Management Systems(DBMS)</h4>
			<h4><i class="fa fa-check-circle"></i> Relational Database Management Systems(RDBMS)</h4>
			<h4><i class="fa fa-check-circle"></i> Visual Script</h4>
			<h4><i class="fa fa-check-circle"></i> Java Script</h4>
			<h4><i class="fa fa-check-circle"></i> Detection of Problem and Troubleshooting</h4>
			<h4><i class="fa fa-check-circle"></i> BIOS and its setup options</h4>
			<h4><i class="fa fa-check-circle"></i> Assembling and overhauling of Computer</h4>
			<h4><i class="fa fa-check-circle"></i> Backup of Data using Different process</h4>
		</div>

	</div>
</div>

@stop