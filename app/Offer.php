<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
	protected $table  =   'offers';
	public static $rules = [
			'title'           => 'min:2|max:255|unique:offers,title,:id',
			'image_url'       => 'mimes:jpeg,png,gif|max:512',
			'description'     =>  'max:255',
		];
	protected $guarded = ['id', '_token', '_method'];
	protected $fillable = ['title', 'image_url', 'status', 'description'];
}
