<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    protected $fillable = ['application_id','paid_amount', 'pay_date',];

    protected $table    = 'installments';

    public static $rules = [
      'application_id'	=> 'required|exists:applications,id',
      'paid_amount'   	=> 'required|min:0',
      'pay_date' 		=> 'required|date_format:Y-m-d',
      ];

    public function application() {
		return $this->belongsTo('App\Application', 'application_id');
	}
}
