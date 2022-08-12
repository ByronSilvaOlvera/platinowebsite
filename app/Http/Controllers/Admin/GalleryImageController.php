<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Entities\Gallery;

class GalleryImageController extends Controller
{
    public function store( $id , Request $request )
    {
        $result = [
            'status' => false,
            'message' => 'No se ha proporcionado un token'
        ];
        $gallery = Gallery::find( $id );

        if ( $request->has('slug') AND $request->has('name') ) :
            $gallery->image()->create([
                'slug' => $request->slug,
                'name' => $request->name,
                'order' => ( $request->has('order') ) ? $request->order : 1
            ]);
            
        endif;
        $gallery = Gallery::with([ 'image' => function( $query ) {
            $query->orderBy('id' , 'Desc');
        } ])->find( $id );

        $result['data'] = $gallery;
        
        return response()->json( $result );
    }
}
