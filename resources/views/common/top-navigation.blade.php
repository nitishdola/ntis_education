<?php
	$display_name = 0;
	if(!empty(Auth::user())) {
		$full_name      = Auth::user()->name;
	   	$display_name   = $full_name;
	}
	
?>
<header>
	<div class="container clearfix">
		<div class="row">
			<div class="col-md-12">
				
				<div class="col-md-3" style="padding:2%">
					<div class="col-md-12">
					<a href="/">
						<img src="http://ntiseducation.com/public/img/NTIS-logo-2.jpg" alt="NTIS" width="167" height="90">
					</a>
					</div>
					
				</div>

				<div class="col-md-6" style="font-weight:bold">
				<h1 style="text-align:center">An ISO:9001:2008 Certified</h1>
				<p style="color:#D60701; font-weight:bold; text-align:center; font-size:18px">A Unit Of Bright Future For Rural Area</p>
				</div>


				<div class="topinfo col-md-3" style="font-size:12px; color:#222">
					
					<div class="infophone" style="margin-top:2%">
						<i class="icon-phone"></i> Tel: 03621-282628
					</div>
					<div class="">
						 Segunbari Manasha Mandir,<p> Near B.E.D.College, </p>
						 <p>Fatashil Ambari.Guwahati-25 </p>
					</div>
				</div>
				<div class="clearfix">
				</div>
				<div class="row-nav navbar">
					<div class="navbar-inner">
						<?php 
						if($display_name){
						?>
						<ul id="nav" class="nav">
							
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Certificate <b class="caret"></b></a>
							<ul class="dropdown-menu js-activated" style="display: none;">
								<li><a href="{{route('certificate_add_path')}}">Add certificate</a></li>
								<li><a href="{{route('certificates_view_path')}}">View Certificates</a></li>
								<!--.dropdown-->
							</ul>
							</li>
							<li class="divider-vertical"></li>

							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Exams <b class="caret"></b></a>
							<ul class="dropdown-menu js-activated" style="display: none;">
								<li><a href="{{route('exam_add_path')}}">Add exam</a></li>
								<li><a href="{{route('exams_view_path')}}">View all Exams</a></li>
								<!--.dropdown-->
							</ul>
							</li>
							<li class="divider-vertical"></li>

							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Admit <b class="caret"></b></a>
							<ul class="dropdown-menu js-activated" style="display: none;">
								<li><a href="{{route('admit_add_path')}}">Add admit</a></li>
								<li><a href="{{route('admit_view_path')}}">View all admits</a></li>
								<!--.dropdown-->
							</ul>
							</li>
							<li class="divider-vertical"></li>

							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Results <b class="caret"></b></a>
							<ul class="dropdown-menu js-activated" style="display: none;">
								<li><a href="{{route('result_add_path')}}">Add result</a></li>
								<li><a href="{{route('result_view_path')}}">View Result</a></li>
								<li><a href="{{route('result_admin_view_path')}}">View Result for Admin</a></li>

								<!--.dropdown-->
							</ul>
							</li>
							<li class="divider-vertical"></li>

							<li><a href="/auth/logout">Logout</a></li>
						</ul>
						<?php }else{ ?>

						<ul id="nav" class="nav">
							<li class="{{Request::path() == '/' ? 'active selected' : ''}}"><a href="{{route('home_path')}}">Home</a></li>
							<li class="divider-vertical"></li>
							<li class="{{Request::path() == 'about-us' ? 'active selected' : ''}}"><a href="{{route('about_path')}}">About Us</a></li>
							<li class="divider-vertical"></li>
							<li><a href="{{route('home_path')}}#course_offered">Courses Offered</a></li>
							<li class="divider-vertical"></li>
							<li class="{{Request::path() == 'track' ? 'active selected' : ''}}"><a href="{{route('track_path')}}">Track Student</a></li>
							<li class="divider-vertical"></li>

							<li class="{{Request::path() == 'results/search' ? 'active selected' : ''}}"><a href="{{route('admission_result_path')}}">Selection Result</a></li>
							<li class="divider-vertical"></li>


							<li class="{{Request::path() == 'contact-us' ? 'active selected' : ''}}"><a href="{{route('contact_path')}}">Contact</a></a>
							<ul class="dropdown-menu js-activated" style="display: none;">
								<li><a href="{{route('contact_path')}}">Contact</a></li>
								<li><a href="{{route('online_form_path')}}">Apply Online</a></li>
								<!--.dropdown-->
							</ul>
							</li>
						
						</ul>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
