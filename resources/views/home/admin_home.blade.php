@extends('admin_default')

@section('content')
<div class="row" style="min-height:410px;">
  <div class="span6">
    <div class="widget widget-nopad">
      <div class="widget-header"> <i class="icon-list-alt"></i>
        <h3> Updatd Data</h3>
      </div>
      <!-- /widget-header -->
      <div class="widget-content">
        <div class="widget big-stats-container">
          <div class="widget-content">
            
            <div id="big_stats" class="cf">
              <div class="stat"> <i class="icon-anchor"></i> <span class="value">{{ $certificates }}</span> Certificates</div>
              <!-- .stat -->
              
              <div class="stat"> <i class="icon-thumbs-up-alt"></i> <span class="value"> {{ $admits }}</span> Admits</div>
              <!-- .stat -->
              
              <div class="stat"> <i class="icon-twitter-sign"></i> <span class="value"> {{ $results }}</span> Results</div>
              <!-- .stat -->
              
              <!-- .stat --> 
            </div>
          </div>
          <!-- /widget-content --> 
          
        </div>
      </div>
    </div>
    
    </div>
    <!-- /widget -->
  </div>
  <!-- /span6 --> 
@stop