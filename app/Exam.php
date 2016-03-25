<?php namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Exam extends Eloquent{
	/**
	* Fillable fields for courses table
	*/
	protected $fillable = ['name', 'admission_last_date', 'total_marks'];
	//protected $except = ['_token', 'code', 'duration',];
}