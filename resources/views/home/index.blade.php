@extends('default')

@section('content')
<!--
<div class="fullwidthbanner-container">
    <div class="main_banner">
        <div class="container">
            <div class="main_banner_text">
                <h1 class="slidetitle_subtitle">
                    <span style="font-weight: 600;">An ISO:9001:2008 Certified</span>
                    <div class="clearfix">
                    </div>
                    
                </h1>
                <h2 class="slidetitle_subtitle" style="font-size: 20px; color: #5a595a; font-weight: 200; text-align: center;">
                    A Unit Of Bright Future For Rural Area
                </h2>
                <div style="text-align: center;">
                 <a  href="{{ route('contact_path') }}" class="btn green margin-bottom-10 margin-top-20" style="text-transform: uppercase; text-align: center;">Contact Us </a>
                 </div>
                 
            </div>
        </div>
    </div>
</div>
-->
<!-- Carousel
================================================== -->
<style>
    

.carousel-control.left, .carousel-control.right {
    background-image: none
}
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="{{ asset('uploads/offers/home-slide-1.jpg') }}" alt="Welcome to NTIS Education">
    </div>
    @foreach($offers as $k => $v)
        <div class="item">
          <img src="{{ $v->image_url }}" alt="{{ $v->title }}">
        </div>
    @endforeach
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->

<div class="container">
    <div class="row margin-top-20 features_home" style="text-align: center;">
        <h1 style="font-weight: 200; padding: 0 10px 0 10px; text-transform: uppercase;">
            Courses offered by  <span style="font-weight: 400;">NTIS </span></h1>
        <h4 style="padding: 0 10px 0 10px; width: 80%; margin: auto;">
            NTIS  is one of the  fastest growing vocational training institute in Assam for more than one reason. Here are some courses offered by NTIS Education.</h4>
    </div>
    <!-- BEGIN SERVICE BOX -->
    <div class="row services-block2 content content-center" style="margin-bottom: 0px;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 item2">
                    <div class="">
                        <a href="{{route('cca_path')}}">
                            <i class="fa fa-laptop fa-4x"></i></a></div>
                    <a href="{{route('cca_path')}}"><h3 style="margin-bottom: 6px; font-size: 22px;">
                        Certificate in Computer Application</h3></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 item2">
                    <div class="">
                        <a href="{{route('dcat_path')}}">
                            <i class="fa fa-code fa-4x"></i></a></div>
                    <a href="{{route('dcat_path')}}"><h3 style="margin-bottom: 6px; font-size: 22px;">
                        Diploma in Computer Application and Technology</h3></a>
                    
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 item2">
                    <div class="">
                        <a href="{{route('adcap_path')}}"><i class="fa fa-globe fa-4x"></i></a>
                    </div>
                    <a href="{{route('adcap_path')}}"><h3 style="margin-bottom: 6px; font-size: 22px">
                        Advanced Diploma in Computer Application &amp; Programming</h3>
                    </a>
                    
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 item2">
                    <div class="">
                        <a href="{{route('pdcst_path')}}"><i class="fa fa-external-link fa-4x"></i></a>
                    </div>
                    <a href="{{route('pdcst_path')}}"><h3 style="margin-bottom: 6px; font-size: 22px">
                        Professional Diploma in Computer Software &amp; Technology</h3>
                    </a>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 item2">
                    <div class="">
                        <a href="{{route('dcht_path')}}">
                            <i class="fa fa-desktop fa-4x"></i>
                        </a>
                    </div>
                    <a href="{{route('dcht_path')}}"><h3 style="margin-bottom: 6px; font-size: 22px">
                        Diploma in Computer Hardware Technology</h3>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 item2">
                    <div class="">
                        <a href="{{route('adchnt_path')}}"><i class="fa fa-cloud-upload fa-4x"></i></a></div>
                    <a href="{{route('adchnt_path')}}"><h3 style="margin-bottom: 6px; font-size: 22px">
                        Advanced Diploma in Computer Hardware and Networking Technology</h3></a>
                   
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 item2">
                    <div class="">
                        <a href="{{route('pdcht_path')}}"><i class="fa fa-share-alt fa-4x"></i></a></div>
                    <a href="{{route('pdcht_path')}}"><h3 style="margin-bottom: 6px; font-size: 22px">
                        Professional Diploma in Computer Hardware Technology</h3></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 item2">
                    <div class="">
                        <a href="{{route('pgdca_path')}}"><i class="fa fa-gear fa-4x"></i></a></div>
                    <a href="{{route('pgdca_path')}}"><h3 style="margin-bottom: 6px; font-size: 22px">
                        Post Graduate Diploma in Computer Application</h3></a>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="clearfix">
</div>
<div class="job_boards_banner" style="min-height: 20px">
    <div class="container">
        <div class="job_boards_banner_text">
            <div class="col-md-12 ">
                <h1 class="slidetitle_subtitle " align="center" style="font-size: 32px; text-transform: uppercase;">
                    About <span style="font-weight: 400;">NTIS Education </span></h1>
                <h4 class="slidetitle_subtitle" style="text-align: left;text-indent: 6%;">
                    NTIS is a high octane growth company, pioneer in the field of Information Technology with substantial visibility in Computer Education and providing Skill Training to the aspirants. It is one of the computer educational institutions with enduring Brand identity in the country. Thus, it has a prominent presence nationwide proving its prowess since inception. It has a successful standing of five years in this competitive world innovating, refining and fine tuning its offerings to suit the needs of students, professionals and employees. 
                </h4>
                <div class="row margin-bottom-20" align="center">
                    <a itemprop="downloadUrl" href="{{ route('about_path') }}" class="btn dark-outline margin-bottom-10 margin-right-10"
                        style="text-transform: uppercase;">More </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix">
</div>
</div>
<!-- END PAGE CONTAINER -->
		
@stop
