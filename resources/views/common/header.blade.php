 <div class="header navbar navbar-default navbar-static-top" style="position:fixed; top:0px; margin:auto; z-index:100000; width:100%;">

    <div class="container">
        <div class="navbar-header">
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="#" class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">
                </span></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN LOGO (you can use logo image instead of text)-->
            <a class="navbar-brand logo-v1" href="{{ route('home_path') }}">
                <img itemprop="image" src="{{ asset('staticassets/img/ntis-logo.jpg') }}" id="logoimg" title="NTIS Eduaction" alt="NTIS Eduaction">
            </a>
            <!-- END LOGO -->
        </div>
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home_path') }}" id="ctl00_A1" itemprop="url">Home </a></li>
                <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a style="background-color:#fff;" data-delay="0" href="{{ route('about_path') }}">About Us</a>
                   
                </li>
                <li><a class="{{ Request::is('course*') ? 'active' : '' }} dropdown-toggle" data-toggle="dropdown" style="background-color:#fff;"
                    data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Courses Offered
                    <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('cca_path')}}">Certificate in Computer Application</a></li>
                        <li><a href="{{route('dcat_path')}}">Diploma in Computer Application and Technology</a></li>
                        <li><a href="{{route('adcap_path')}}">Advanced Diploma in Computer Application &amp; Programming</a></li>
                        <li><a href="{{route('pdcst_path')}}">Professional Diploma in Computer Software &amp; Technology</a></li>
                        <li><a href="{{route('dcht_path')}}">Diploma in Computer Hardware Technology</a></li>
                        <li><a href="{{route('adchnt_path')}}">Advanced Diploma in Computer Hardware and Networking Technology</a></li>
                        <li><a href="{{route('pdcht_path')}}">Professional Diploma in Computer Hardware Technology</a></li>
                        <li><a href="{{route('pgdca_path')}}">Post Graduate Diploma in Computer Application</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('track') ? 'active' : '' }}"><a style="background-color:#fff;" href="{{ route('track_path') }}">Verify Certificate</a>
                </li>
                
                <li class="{{ Request::is('results/search') ? 'active' : '' }}"><a id="A2" href="{{ route('admission_result_path') }}" itemprop="url">Selection result</a></li>
                <li class="{{ Request::is('apply-online') ? 'active' : '' }}"><a id="A2" href="{{ route('apply.online') }}" itemprop="url">Apply</a></li>
                <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a id="A3" href="{{ route('contact_path') }}" itemprop="url">Contact</a></li>
            </ul>
        </div>
        <!-- BEGIN TOP NAVIGATION MENU -->
    </div>
</div>