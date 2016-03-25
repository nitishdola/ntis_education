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
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
@include('common.admin.header')
@include('common.admin.navigation')
<div class="main">
  	<div class="main-inner">
    	<div class="container">
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

<script>  
jQuery(document).ready(function () {
  $('input.datepicker').Zebra_DatePicker();
});
</script>

</body>
</html>   