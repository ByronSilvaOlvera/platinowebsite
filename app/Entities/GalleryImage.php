<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryImage extends Model
{
    protected $table = 'gallery_image';
    protected $fillable = [
        'gallery_id' , 'name' , 'slug' , 'order'
    ];
    protected $hidden = [
        'deleted_at'
    ];
    use SoftDeletes;

    public function gallery()
    {
        return $this->hasOne( 'App\Entities\GalleryImage' , 'id' , 'gallery_id' );
    }
}
