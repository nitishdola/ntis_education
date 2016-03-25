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
			<h4><i class="fa fa-check-circle"></i> Fundamentals of Computer Hardware and Software</h4>
			<h4><i class="fa fa-check-circle"></i> MS-DOS,Handling Windows(Notepad, Wordpad,Paint, Internet explorer etc) </h4>
			<h4><i class="fa fa-check-circle"></i> Detection of problem and Troubleshooting</h4>
			<h4><i class="fa fa-check-circle"></i> BIOS and Setup Options</h4>
			<h4><i class="fa fa-check-circle"></i> Importance of Laptopn & Desktop Computer in the Human Life </h4>
			<h4><i class="fa fa-check-circle"></i> Fundamentals of Mother Board, PCI Card, Sound Card, Storage Devices</h4>
			<h4><i class="fa fa-check-circle"></i> Function of Memory(RAM) and Processor</h4>
			<h4><i class="fa fa-check-circle"></i> Assembling and overhauling of Computer</h4>
			<h4><i class="fa fa-check-circle"></i> Backup of Data using Different Process</h4>
			<h4><i class="fa fa-check-circle"></i> Function of hardware Components</h4>
			<h4><i class="fa fa-check-circle"></i> Computer Maintenace</h4>
			<h4><i class="fa fa-check-circle"></i> Multi Booking</h4>
			<h4><i class="fa fa-check-circle"></i> Virus Killing using Antivirus</h4>
		</div>

		<div class="col-md-10 col-md-offset-1">
			<h3 style="text-decoration:underline">2nd Semester</h3>
			<h4><i class="fa fa-check-circle"></i> Partitioning and Formatting of Hardisk</h4>
			<h4><i class="fa fa-check-circle"></i> Installation and Classifications of operating systems(Win 98, XP, Vista, Win-7, Win-8 etc)</h4>
			<h4><i class="fa fa-check-circle"></i> Installation of various Hardware Drivers</h4>
			<h4><i class="fa fa-check-circle"></i> Installation of various Application Softwares(MS Office, Page MAker, Photoshop, Corel Draw, Talley, SQL Server, C, C++, Foxpro, Leap Office, ISM, GIST etc</h4>
			<h4><i class="fa fa-check-circle"></i> Repairing of UPS, Printer, Monitor, SMPS, Motherboard & Hard Disk </h4>
			<h4><i class="fa fa-check-circle"></i> Internet Configuring</h4>
			<h4><i class="fa fa-check-circle"></i> Internet Browsing & Email Handling</h4>
			<h4><i class="fa fa-check-circle"></i> Hardware Setting</h4>
			<h4><i class="fa fa-check-circle"></i> Types of Networks</h4>
			<h4><i class="fa fa-check-circle"></i> Networking(LAN, WAN etc)</h4>
			<h4><i class="fa fa-check-circle"></i> Concept of HUB, Switch, Cables, Connectors etc.</h4>
			<h4><i class="fa fa-check-circle"></i> LAN Connections and its Configurations</h4>
			<h4><i class="fa fa-check-circle"></i> Sharing of Computers, Drivers,Folders, Files, Printers etc</h4>
			<h4><i class="fa fa-check-circle"></i> Field Practical Training</h4>
		</div>

	</div>
</div>

@stop