<?php namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Result extends Eloquent{
	/**
	* Fillable fields for courses table
	*/
	protected $fillable = ['exam_id', 'roll_number', 'marks_obtained', 'course_id', 'course_fee'];

	public function result() {
		return $this->belongsTo('App\Exams', 'exam_id');
	}

	public function course() {
		return $this->belongsTo('App\Course', 'course_id');
	}

	public function check_if_roll_number_exists($roll_number = NULL, $exam_id = NULL) {

		$matchThese = ['roll_number' => $roll_number, 'exam_id' => $exam_id];

		$check = Admit::where($matchThese)->first();
		if ($check === null) {
		   return FALSE;
		}

		return TRUE;
	}

	public function check_if_mark_exists($roll_number = NULL, $exam_id = NULL) {

		$matchThese = ['roll_number' => $roll_number, 'exam_id' => $exam_id];

		$check = Result::where($matchThese)->first();
		if ($check === null) {
		   return FALSE;
		}

		return TRUE;
	}
}