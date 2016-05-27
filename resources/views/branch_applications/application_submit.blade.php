@extends('admin_default')

@section('content')
<div class="container courses-page">
    <div class="row ntis-page">
		<div class="page-header">
			<h2>Application Submit</h2>
			<div class="headerdivider">
			</div>
		</div>
		<div class="row top30">
			<div class="span12">
				@if (session('status'))
				    {!! session('status') !!}
				@endif
			</div>

			<div class="span12">
			{!! Form::open(array('class' => "form-horizontal", 'files' => true)) !!}
			<fieldset>
					<div class="span12">
						@include('branch_applications._form')
					</div>
					<div class="span2"></div><input class="btn btn-success" type="submit" value="Apply">

				</fieldset>
			{!! Form::close() !!}
			</div>
			
			
		</div>
	</div>
</div>
@stop

@section('Scripts')
<script>
	$('#course_id').change(function() {
		var course_id = $(this).val();
		if(course_id != '') {
			var data = '';
			data += '&course_id='+course_id;

			var url_to_call = '';
			url_to_call += "{{ URL::to('api-get-course-info')}}"; //console.log(url_to_call);
            //$.blockUI();
            $.ajax({
            	data : data,
            	url  : url_to_call,
            	type : 'GET',
            	dataType : "JSON",

                    error : function(resp) {
                        alert('Please try again !');
                       // $.unblockUI();
                    },

                    success : function(resp) {
                        //$.unblockUI();
                        if(jQuery.isEmptyObject(resp)) {
                            alert('No Course found !');
                        }else{
                            $('#duration').val(resp.duration);
                        }
                    }
            });
		}else{
			$('#duration').val('');
		}
	});
</script>
@stop