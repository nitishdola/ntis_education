@extends('admin_default')

@section('content')

<div class="page-header">
	<h1>Add a Installment</h1>
	<div class="headerdivider">
	</div>
</div>
<div class="row top30">
	<div class="span7">
		@if (session('status'))
		    {!! session('status') !!}
		@endif

		{!! Form::model($installment, array('class' => "form-horizontal")) !!}
			<fieldset>
				@include('installments._form')
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput"></label>  
				  <div class="col-md-6">
				  	<input class="btn btn-success" type="submit" value="Update Installment">
				  </div>
				</div>

			</fieldset>
		{!! Form::close() !!}

	</div>

  <div class="span5" id="student_details"></div>
	
</div>
@stop

@section('Scripts')
<script>
$('#branch_application_id').change(function() {
  load_info();
});
function load_info() {
  var $this = $('#branch_application_id');
  var branch_application_id = $this.val();

  if(branch_application_id != '') {
      var data = '';
      data += '&branch_application_id='+branch_application_id;

      var url_to_call = '';
      url_to_call += "{{ URL::to('api-get-student-info')}}";
      $.blockUI();
      $.ajax({
          data : data,
          url  : url_to_call,
          type : "GET",
          dataType : "JSON",

          error : function(resp) {
              alert('Please try again !');
              $.unblockUI();
          },

          success : function(resp) {
              $.unblockUI();
              if(jQuery.isEmptyObject(resp)) {
                  alert('No Student Found !');
              }else{
                  render_ui(resp);
              }
          }
      });
  }
}

function render_ui(resp) {
  var html = '';
  html += '<div class="span4"><b>Student Name</b> :</div><div class="span5">'+resp.name+'</div>';
  html += '<div class="span4"><b>Father Name</b> :</div><div class="span5">'+resp.father_name+'</div>';
  html += '<div class="span4"><b>Mobile Number</b> :</div><div class="span5">'+resp.mobile_number+'</div>';

  $('#student_details').html(html);
}
</script>
@stop