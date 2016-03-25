<?php namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Course extends Eloquent{
	/**
	* Fillable fields for courses table
	*/
	protected $fillable = ['name', 'code', 'duration','admission_fee', 'course_fee', 'status'];
	//protected $except = ['_token', 'code', 'duration',];
}