<?php

namespace App\Http\Controllers\Marketplace;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entities\Category;
use App\Entities\Product;
class IndexController extends Controller
{
    public $data = [
        'pageBody' => '',
        'pageTitle' => ''
    ];
    public function index() {

        $rows = [];
        // $rows = Product::orderBy('name','Asc')->get();
        // foreach( $rows as $row ) :
        //     $urlencode = urlencode( 'Hola me interesa este producto '. $row['name'] );

        //     $row['share'] = [
        //         'phone_01' => '098 167 1712',
        //         'phone_02' => '097 950 7030',
        //         'url_phone_01' => 'https://wa.me/593981671712?text=' . $urlencode,
        //         'url_phone_02' => 'https://wa.me/593979507030?text=' . $urlencode
        //     ];
        // endforeach;
        $this->data['rows'] = $rows;



        $urlencode = urlencode( 'Hola me interesa los productos ' );

        $this->data['share'] = [
            'phone_01' => '099 579 7405',
            'phone_02' => '099 158 5413',
            'phone_03' => '099 405 5404',
            'phone_04' => '096 916 2101',
            'phone_05' => '099 386 6107',
            'phone_06' => '098 079 5145',

            'phone_logistics' => '099 574 1864',
            'phone_gye01' => '098 079 5145',
            'phone_gye02' => '099 437 9899',
            'phone_uio01' => '099 896 9521',
            'phone_cue01' => '098 019 8689',
            'phone_cue02' => '099 863 8027',

            'url_phone_01' => 'https://wa.me/593995797405?text=',
            'url_phone_02' => 'https://wa.me/593991585413?text=',
            'url_phone_03' => 'https://wa.me/593994055404?text=',
            'url_phone_04' => 'https://wa.me/593969162101?text=',
            'url_phone_05' => 'https://wa.me/593993866107?text=',
            'url_phone_06' => 'https://wa.me/593980795145?text=',

            'url_phone_logistics' => 'https://wa.me/593995741864?text=',
            'url_phone_gye01' => 'https://wa.me/593980795145?text=',
            'url_phone_gye02' => 'https://wa.me/593994379899?text=',
            'url_phone_uio01' => 'https://wa.me/593998969521?text=',
            'url_phone_cue01' => 'https://wa.me/593980198689?text=',
            'url_phone_cue02' => 'https://wa.me/593998638027?text='
        ];
        $this->data['share_text'] = [
            'logistics' => urlencode('Hola me interesa el servicio de Flota de camiones y camionetas para entregas.'),
            'cabinas' => urlencode('Hola me interesa las cabinas de desinfección.'),
            'insumos' => urlencode('Hola me interesa los insumos.'),
            'productos' => urlencode('Hola me interesa los productos.')
        ];

        $category = Category::with([ 'product' => function( $query ) {
            $query->orderBy('name', 'Asc');
        }])->whereIn('id',[1,2,3])->get();
        $this->data['category'] = $category;

        $this->data['category2'] = Category::with([ 'product' => function( $query ) {
            $query->orderBy('name', 'Asc');
        }])->whereNotIn('id',[1,2,3] )->orderBy('id','Desc')->get();


        $this->renderParams( 'marketplace' , 'Marketplace' );
    	return view('Marketplace.home.index', $this->data );
    }
    private function renderParams( $page = 'home' , $title = '' )
    {
        $this->data['pageBody'] = 'page-'. $page ;
        $this->data['pageTitle'] = $title;
    }
}
