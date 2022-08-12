<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
        'name'
    ];
    protected $hidden = [
        'deleted_at'
    ];
    use SoftDeletes;

    public function image()
    {
        return $this->hasMany('App\Entities\GalleryImage', 'gallery_id', 'id');
    }
}
