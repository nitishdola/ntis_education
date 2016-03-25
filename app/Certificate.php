<?php namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Certificate extends Eloquent{
	/**
	* Fillable fields for courses table
	*/
	protected $fillable = ['sl_no','student_name', 'registration_number', 'course_id','from', 'centre', 'period_from', 'period_to', 'grade', 'issue_date'];

	public function certificate() {
		return $this->belongsTo('App\Course', 'course_id');
	}

	public function check_if_registration_number_exists($registration_number = NULL) {
		$certificate = Certificate::where('registration_number', '=', $registration_number)->first();
		if ($certificate === null) {
		   return FALSE;
		}

		return TRUE;
	}
}