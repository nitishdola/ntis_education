<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    protected $fillable = ['branch_application_id','paid_amount', 'pay_date',];

    protected $table    = 'installments';

    public static $rules = [
      'branch_application_id'	  => 'required|exists:applications,id',
      'paid_amount'   	       => 'required|min:0',
      'pay_date' 		           => 'required|date_format:Y-m-d',
      ];

    public function branch_application() {
		  return $this->belongsTo('App\BranchApplication', 'branch_application_id');
    }
}
