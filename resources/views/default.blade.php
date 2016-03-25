<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- Facebook Open Graph -->
    <meta property="article:publisher" content="http://www.facebook.com/atrackingsystem" />
    <meta property="article:author" content="https://www.facebook.com/atrackingsystem" />
    <meta property='fb:app_id' content="556161237816448" />
    <meta property="fb:admins" content="100000568401438" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@atrackingsystem">
    <meta name="twitter:title" content="NTIS Education">
    <meta name="twitter:description" content="NTIS Education - Computer education training">
    <meta name="twitter:creator" content="@atrackingsystem">
    <meta name="twitter:image:src" content="staticassets/img/logo.png">
    <meta name="twitter:domain" content="NTIS Education">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('staticassets/plugins/revolution_slider/css/rs-stylebcbe.css?222') }}"
        media="screen">
    <link href="{{ asset('staticassets/css/style-metronic698d.css?111') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('staticassets/css/stylebcbe.css?222') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('staticassets/css/themes/blue698d.css?111') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('staticassets/css/style-responsivebcbe.css?222') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('staticassets/css/custombcbe.css?222') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('staticassets/plugins/bootstrap-select/bootstrap-select.min.css') }}" />
    <link  rel="shortcut icon" href="faviconc4ca.ico?1" />
     <link rel="stylesheet" type="text/css" href="{{ asset('staticassets/css/pages/portfolio698d.css?111') }}" />
     
    <style>
        .block
        {
            padding-top: 0 !important;
            border-bottom: #ddd solid 1px !important;
            margin-bottom: 20px !important;
        }
    </style>
    
    
    <title>NTIS Education | Computer education in Assam</title>
    <meta name="description" content="NTIS is a high octane growth company, pioneer in the field of Information Technology with substantial visibility in Computer Education." />
    <meta name="keywords" content="NTIS Education, Computer institute, Assam, Udalguri" />
    <link rel="canonical" href="index.html" />
     <style>
        .form-control
        {
            font-weight: normal;
            color: #333333;
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            font-family: 'Open Sans' , sans-serif;
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            height: 42px !important;
        }
        
        .blockquote
        {
            padding: 10px 0px;
        }
        .page-container
        {
            margin-top: 0px !important;
        }
    </style>

</head>
<!-- END HEAD -->
<body>
    @include('common.header')
     <!-- BEGIN PAGE CONTAINER -->
    <div class="page-container">
        @yield('content')
    </div>
    @include('common/footer')
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="../staticassets/plugins/respond.min.js"></script>  
    <![endif]-->
    
    <script src="{{ asset('staticassets/plugins/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('staticassets/plugins/hover-dropdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('staticassets/plugins/back-to-top.js') }}"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.7/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" type="text/javascript"></script>
    <script src="{{ asset('staticassets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" type="text/javascript"></script>

    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('staticassets/scripts/app.js') }}"></script>
    <script src="{{ asset('staticassets/scripts/index.js') }}"></script>
    <script src="{{ asset('assets/CustomScripts/CommonMethods6c0d.js?4.2111') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
           
            App.init();
            App.initUniform();
            //App.initBxSlider();
            //Index.initRevolutionSlider();
        });
    </script>
    @yield('page_scripts')
</body>
</html>