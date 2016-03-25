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
			<h3 style="text-decoration:underline">Course Module</h3>
		</div>
	</div>

	<div class="row course-syll">
		<div class="col-md-10 col-md-offset-1">
			<h4><i class="fa fa-check-circle"></i> Fundamentals of Computer</h4>
			<h4><i class="fa fa-check-circle"></i> MS-DOS,Handling Windows(Notepad, Wordpad,Paint, Internet explorer etc) </h4>
			<h4><i class="fa fa-check-circle"></i> MS Office(Word, Excel,Power Point & Access</h4>
			<h4><i class="fa fa-check-circle"></i> D.T.P(Full Package with page maker, Corel Draw, Photoshop, GIST etc)</h4>
			<h4><i class="fa fa-check-circle"></i> Bilinguals Package(Assamese,Bengali,Hindi, Bodo etc)</h4>
			<h4><i class="fa fa-check-circle"></i> Fundamentals of Tally</h4>
		</div>
	</div>
</div>

@stop