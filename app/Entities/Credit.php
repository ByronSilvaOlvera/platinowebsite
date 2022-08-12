<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credit extends Model
{
 
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $table = 'credit';
	protected $fillable = [
		'client_id', 'user_id' , 'type' , 'concept' , 'approved' , 'date_purchase' , 'start_payment', 'amount' , 'payment_frequency' , 'amount_payments' , 'total' , 'surcharge' , 'observation' , 'status' 
	];

    public function payment()
    {
        return $this->hasMany( 'App\Entities\Payment' , 'credit_id' , 'id' );
    }
    public function client()
    {
        return $this->hasOne( 'App\Entities\Client' , 'id' , 'client_id' );
    }
}
