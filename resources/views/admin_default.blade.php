<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTIS - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/pages/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/zebra_default.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('zebra_datepicker/css/default.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css') }}" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

@yield('Styles')
</head>
<body>
@include('common.admin.header')
@include('common.admin.navigation')
<div class="main">
  	<div class="main-inner">
    	<div class="container">
        
        <div class="row">
          <section class="content">
          @if (Session::has('message') || Session::has('alert-info'))
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-info"></i>
                {{ Session::get('message')}} {{ Session::get('alert-info')}}
            </div>
          @endif

          @if (Session::has('alert-warning'))
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-warning"></i>{{ Session::get('alert-warning')}}
            </div>
          @endif

          @if (Session::has('alert-success'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i>{{ Session::get('alert-success')}}
            </div>
          @endif
        </section><!-- /.content -->
      </div>

    		@yield('content')
    	</div>
   </div>
</div>
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; {{ date('Y') }} <a href="http://www.egrappler.com/">NTIS ADMIN</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="{{ asset('admin/js/jquery-1.7.2.min.js') }}"></script> 
<script src="{{ asset('admin/js/excanvas.min.js') }}"></script> 
<script src="{{ asset('admin/js/chart.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('admin/js/bootstrap.js') }}"></script>
 
<script src="{{ asset('admin/js/base.js') }}"></script> 
<script src="{{ asset('admin/js/zebra/zebra_datepicker.js') }}"></script> 
<script src="{{ asset('zebra_datepicker/javascript/zebra_datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('bootstrap-select-1.10.0/dist/css/bootstrap-select.min.js') }}" type="text/javascript"></script>

<script>  
jQuery(document).ready(function () {
  $('input.datepicker').Zebra_DatePicker();
   $('.selectpicker').selectpicker();
});
</script>

@yield('Scripts')
<script>
  $('.date-pick-year').Zebra_DatePicker({
      view: 'years',
      format: 'd-m-Y',
      direction: -1
  });
  $('.apply-date').Zebra_DatePicker({
      //direction : ["{{ date('Y-m-d', strtotime('-20 days', strtotime(date('Y-m-d')))) }}", false]
  });
</script>
</body>
</html>   