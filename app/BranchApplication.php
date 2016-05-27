<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchApplication extends Model
{
    protected $fillable = ['name','father_name', 'course_id','address', 'pin', 'mobile_number', 'dob' ,'form','student_code', 'branch_name',  'apply_date'];

    protected $table    = 'branch_applications';

    public static $rules = [
      'name'    		=> 	'required|min:3|max:50',
      'father_name'   	=>  'required|min:3|max:50',
      'course_id'    	=>  'required|exists:courses,id',
      'address'	 		=>	'required|min:5',
      'pin' 			=> 	'required|numeric|digits_between:6,6',
      'dob'         	=>  'required|date_format:d-m-Y|before:"now -15 year"',
      'mobile_number'  	=>  'required|numeric|digits_between:10,10',
      'form'           	=> 	'required|mimes:jpg,jpeg,png,pdf|max:2000',
      'apply_date'  	=> 	'required|date',
      'branch_name' 	=> 	'required',
      'student_code' 	=> 	'required'
  	];

	public function course() {
		return $this->belongsTo('App\Course', 'course_id');
	}
}
