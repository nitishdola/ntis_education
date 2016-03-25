<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.html"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Certificate</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('certificate_add_path') }}">Add</a></li>
            <li><a href="{{ route('certificates_view_path') }}">View Certificates</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-cogs
"></i><span>Exam</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('exam_add_path') }}">Add</a></li>
            <li><a href="{{ route('exams_view_path') }}">View all exams</a></li>
          </ul> 
        </li>
        
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-signal"></i><span>Admits</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admit_add_path') }}">Add</a></li>
            <li><a href="{{ route('admit_view_path') }}">View all admits</a></li>
          </ul> 
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-retweet
"></i><span>Result</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('result_add_path') }}">Add</a></li>
            <li><a href="{{ route('result_view_path') }}">View result</a></li>
            <li><a href="{{ route('result_admin_view_path') }}">View result(ADMIN)</a></li>
          </ul> 
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->