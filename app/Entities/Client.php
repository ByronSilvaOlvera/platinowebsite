<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $table = 'client';
	protected $fillable = [
		'first_name' , 'last_name' , 'code' , 'document' , 'telephone' , 'phone' , 'address' , 'address_reference' , 'document_front' , 'document_back' , 'picture_id'
	];

    protected $appends = [
        'name'
    ];
	public function getNameAttribute()
	{
		return $this->first_name.' '.$this->last_name;
	}

}
