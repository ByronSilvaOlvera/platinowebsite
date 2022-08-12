<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = [
        'name' , 'image' , 'price' , 'stock' , 'description'
    ];
    protected $hidden = [
        'deleted_at'
    ];
    protected $appends = [
        'image_url' , 'share_text' , 'share_gye01', 'share_gye02', 'share_uio01'
    ];
    use SoftDeletes;

    public function category()
    {
        return $this->hasOne( 'App\Entities\Category' , 'id' , 'category_id' );//Modelo a relacionar,foreing_key,local_key
    }

	public function getImageUrlAttribute()
	{
		return asset('/imgs/marketplace/products').'/'.$this->image;
	}
    public function getShareTextAttribute()
	{
		return urlencode( 'Hola me interesa este producto '. $this->name );
	}
    public function getShareGye01Attribute()
	{
        $urlencode = urlencode( 'Hola me interesa este producto '. $this->name );
		return 'https://wa.me/593988982617?text=' . $urlencode;
	}
    public function getShareGye02Attribute()
	{
        $urlencode = urlencode( 'Hola me interesa este producto '. $this->name );
		return 'https://wa.me/593998960685?text=' . $urlencode;
	}
    public function getShareUio01Attribute()
	{
        $urlencode = urlencode( 'Hola me interesa este producto '. $this->name );
		return 'https://wa.me/593999667515?text=' . $urlencode;
	}
}
