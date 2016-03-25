<?php namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Admit extends Eloquent{
	/**
	* Fillable fields for courses table
	*/
	protected $fillable = ['exam_id', 'student_name','gender', 'parent_name','roll_number', 'centre', 'status'];
	//protected $except = ['_token', 'code', 'duration',];

	public function check_if_rollno_exists($roll_number = NULL) {
		$check = Admit::where('roll_number', '=', $roll_number)->first();
		if ($check === null) {
		   return FALSE;
		}

		return TRUE;
	}
}