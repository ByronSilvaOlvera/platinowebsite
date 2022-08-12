<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $table = 'payment';
	protected $fillable = [
		'credit_id' , 'user_id' , 'amount' , 'date_payment' , 'observation' , 'status'
	];

    public function credit()
    {
        return $this->hasOne( 'App\Entities\Credit' , 'id' , 'credit_id' );
    }
    public function client()
    {
        return $this->hasOne( 'App\Entities\Client' , 'id' , 'client_id' );
    }
}
