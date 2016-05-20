<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['name','father_name', 'sex', 'registration_number', 'course_id','present_address', 'pin', 'mobile_number', 'permanent_address', 'permanent_pin', 'permanent_mobile_number', 'category','dob', 'religion', 'educational_qualification', 'year_of_passing', 'board', 'class', 'major', 'stream', 'photo', 'code_number', 'center_name', 'center_code', 'student_code', 'student_reg_number', 'verified_by', 'apply_date'];

    protected $table    = 'applications';

    public static $rules = [
      'name'    		    => 'required|min:3|max:50',
      'father_name'   	=>  'required|min:3|max:50',
      'sex' 			      => 'required',
      'registration_number' =>  'max:50',
      'course_id'    	   =>  'required|exists:courses,id',
      'religion'    	   =>  'required',
      'present_address'	 =>'required|min:5',
      'pin' 			       => 'required|numeric|digits_between:6,6',
      'dob'         	   =>  'required|date_format:d-m-Y|before:"now -15 year"',
      'mobile_number'  	 =>  'required|numeric|digits_between:10,10',
      'permanent_address'=>'required|min:5',
      'permanent_pin' 	 => 'required|numeric|digits_between:6,6',
      'permanent_mobile_number'    =>  'required|numeric|digits_between:10,10',
      'educational_qualification'  =>  'required',
      'year_of_passing'	 =>  'numeric|numeric|digits_between:4,4',
      'board'    		=>  'required|max:50',
      'class' 			=>  'required|max:127',
      'stream' 			=>  'required|max:127',
      'photo'           => 'required|mimes:jpg,jpeg,png|max:2000',
      'apply_date'  => 'required|date',

  ];

  public function course() {
    return $this->belongsTo('App\Course', 'course_id');
  }
}
