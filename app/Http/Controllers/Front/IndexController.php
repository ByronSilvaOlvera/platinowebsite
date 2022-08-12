<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ICS;

use App\Entities\Gallery;
use App\Entities\GalleryItem;

class IndexController extends Controller
{
    public $data = [
        'pageBody' => '',
        'pageTitle' => '',
        'pageLogo' => 'imgs/logo.png',
        'menu' => [
        ]
    ];
    public function index()
    {
        $galleryQuery = Gallery::query();
        
        $this->renderParams( 'home' , '' );
        $clients = [
            [
                'name' => 'La Fabril',
                'slug' => 'la-fabril'
            ],
            [
                'name' => 'Bic',
                'slug' => 'bic'
            ],
            [
                'name' => 'Nestle',
                'slug' => 'nestle'
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung'
            ],
            [
                'name' => 'Condor',
                'slug' => 'condor'
            ],
            [
                'name' => 'Whirpool',
                'slug' => 'whirpool'
            ],
            [
                'name' => 'Kelloggs',
                'slug' => 'kelloggs'
            ],
            [
                'name' => 'Alpina',
                'slug' => 'alpina'
            ],
            [
                'name' => 'Kimberly Clark',
                'slug' => 'kimberly-clark'
            ],
            [
                'name' => 'Pronaca',
                'slug' => 'pronaca'
            ],
            [
                'name' => 'Inalecsa',
                'slug' => 'inalecsa'
            ],
            [
                'name' => 'Johnson Wax',
                'slug' => 'johnson-wax'
            ],
            [
                'name' => 'Claro',
                'slug' => 'claro'
            ],
            [
                'name' => 'La universal',
                'slug' => 'la-universal'
            ],
            [
                'name' => 'Tesalia CBC',
                'slug' => 'tesalia-cbc'
            ],
            [
                'name' => 'Carozzi',
                'slug' => 'carozzi'
            ],
            [
                'name' => 'Epson',
                'slug' => 'epson'
            ],
            [
                'name' => 'Chiveria',
                'slug' => 'chiveria'
            ],
            [
                'name' => 'Veconsa',
                'slug' => 'veconsa'
            ],
            [
                'name' => 'Agripac',
                'slug' => 'agripac'
            ],
            [
                'name' => 'Tropicalimentos',
                'slug' => 'tropicalimentos'
            ],
            [
                'name' => 'KfC',
                'slug' => 'kfc'
            ],
            [
                'name' => 'Toni',
                'slug' => 'toni'
            ],
            [
                'name' => 'Umco',
                'slug' => 'umco'
            ],
            [
                'name' => 'Produtexti',
                'slug' => 'produtexti'
            ],
            [
                'name' => 'Unilever',
                'slug' => 'unilever'
            ],
            [
                'name' => 'Venus',
                'slug' => 'venus'
            ],
            [
                'name' => 'Reylacteos',
                'slug' => 'reylacteos'
            ],
            [
                'name' => 'Pycca',
                'slug' => 'pycca'
            ],
            [
                'name' => 'Calbaq',
                'slug' => 'calbaq'
            ],
            [
                'name' => 'La Sante',
                'slug' => 'la-sante'
            ],
            [
                'name' => 'Pepsi',
                'slug' => 'pepsi'
            ],
            [
                'name' => 'Saint Gobain',
                'slug' => 'saint-gobain'
            ],
            [
                'name' => 'Ecuaquimica',
                'slug' => 'ecuaquimica'
            ],
            [
                'name' => 'Rooftec',
                'slug' => 'rooftec'
            ]
        ];
        $video = [
            [
                'thumb' => 'show-truck.jpg',
                'slug' => 'show-truck'
            ],
            [
                'thumb' => 'juegos-digitales.jpg',
                'slug' => 'juegos-digitales'
            ],
            [
                'thumb' => 'ganadores-de-la-final-champion.jpg',
                'slug' => 'videos-pepsi-ganadores-uefa'
            ],
            [
                'thumb' => 'toni-visita-hogares.jpg',
                'slug' => 'toni-visita-hogares'
            ],
            [
                'thumb' => 'la-fabril-activacion-punto-de-venta.jpg',
                'slug' => 'la-fabril-activacion-punto-de-venta'
            ],
            [
                'thumb' => 'raid.jpg',
                'slug' => 'raid'
            ],
            [
                'thumb' => 'toni-100-activacion.jpg',
                'slug' => 'toni-100-activacion'
            ],
            [
                'thumb' => 'toni-enamorate.jpg',
                'slug' => 'toni-enamorate'
            ],
            [
                'thumb' => 'unilever-deja-antibacterial.jpg',
                'slug' => 'unilever-deja-antibacterial'
            ],
            [
                'thumb' => 'robot-eve.jpg',
                'slug' => 'robot-eve'
            ]
        ];
        $this->data['gallery'] = $galleryQuery->with(['image' => function($query){
            $query->orderBy('order','Asc');
        }])->get();
        $this->data['clients'] = $clients;
        $this->data['video'] = $video;
    	return view('Front.home.index', $this->data );
    }
    public function about()
    {
        $this->renderParams( 'about' , 'Nosotros' );
    	return view('Front.about.index', $this->data );
    }
    public function service()
    {
        $this->renderParams( 'service' , 'Servicios');
    	return view('Front.service.index', $this->data );
    }
    public function coverage()
    {
        $this->renderParams( 'coverage' , 'Cobertura' , 'logo-white' );
    	return view('Front.coverage.index', $this->data );
    }
    public function policies()
    {
        $this->renderParams( 'policies' , 'Políticas y Certificaciones' );
    	return view('Front.policies.index', $this->data );
    }
    public function school()
    {
        $this->renderParams( 'school' , 'Escuela Trade' );
    	return view('Front.school.index', $this->data );
    }
    public function ptsmart()
    {
        $this->renderParams( 'ptsmart' , 'Pt Smart' );
    	return view('Front.ptsmart.index', $this->data );
    }
    public function contact()
    {
        $this->renderParams( 'contact' , 'Contactenos' );
    	return view('Front.contact.index', $this->data );
    }
    private function renderParams( $page = 'home' , $title = '' , $logo = 'logo' )
    {
        $this->data['pageBody'] = 'page-'. $page ;
        $this->data['pageTitle'] = $title;
        $this->data['pageLogo'] = 'imgs/'. $logo .'.png';
        $this->data['menu'][ $page ] = 'active';
    }
}
