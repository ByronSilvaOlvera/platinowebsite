<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'name' , 'image'
    ];
    protected $hidden = [
        'deleted_at'
    ];
    use SoftDeletes;
    
    public function product()
    {
        return $this->hasMany( 'App\Entities\Product' , 'category_id' , 'id' );
    }
}
