@extends('Front.master')
@section('content')
<article class="vision-mision">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-mision">
                <h2>Misión</h2>
                <p>
                    Creamos, implementamos e impulsamos soluciones de marketing que busquen el incremento del consumo o el desarrollo de canales de distribución de productos y servicios de empresas nacionales y multinacionales a través de técnicas de comunicación no masivas dirigidas a segmentos específicos.
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-vision">
                <h2>Visión</h2>
                <p>
                    En el Ecuador del 2029 seremos los preferidos en nuestro rubro por dar excelencia en la calidad de nuestro servicio y reconocidos como potentes gestores de innovación, formación y empleo.
                </p>
            </div>
        </div>
    </div>
</article>
<section class="section section-hitos">
    <h3 class="hitos-title">Hitos</h3>
    <div class="we-canvas">
        <div class="we-box">
            <div class="we-inner">
                @include('Front.about.1999')
                @include('Front.about.2002')
                @include('Front.about.2008')
                @include('Front.about.2013')
                @include('Front.about.2015')
                @include('Front.about.2018')
                @include('Front.about.2019')
            </div>
        </div>
        <div class="arrows">
            <button class="btn btn-canvas-prev" margin-right>
                <i class="mdi mdi-chevron-left"></i>
            </button>
            <button class="btn btn-canvas-next" margin-left>
                <i class="mdi mdi-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
@endsection
@section('extraJs')
<script>
	function animate( el , cls , time) {
		setTimeout( function() {
			$( el ).removeClass('hidden').addClass(  'animated '+  cls )
		} , time )
	}
    $(function(){
        function init1999( delay ) {
            animate('.wi_1999 .ecuatorial' , 'fadeInLeft' , ( delay + 0 ) );
            animate('.wi_1999 .circle' , 'rollIn' , ( delay + 250 ) );
            animate('.wi_1999 .entry-year' , 'flipInX' , ( delay + 750 ) );
            animate('.wi_1999 .reclutamiento' , 'flipInX' , ( delay + 1250 ) );
            animate('.wi_1999 .clientes' , 'flipInX' , ( delay + 1750 ) );
            animate('.wi_1999 .clientes' , 'flipInX' , ( delay + 2250 ) );
        }
        function init2002( delay ) {
            animate('.wi_2002 .ecuatorial' , 'fadeInLeft' , ( delay + 0 ) );
            animate('.wi_2002 .circle' , 'rollIn' , ( delay + 250 ) );
            animate('.wi_2002 .entry-year' , 'flipInX' , ( delay + 750 ) );
            animate('.wi_2002 .ampliacion' , 'flipInX' , ( delay + 1250 ) );
            animate('.wi_2002 .clientes' , 'flipInX' , ( delay + 1750 ) );
        }
        function init2008( delay ) {
            animate('.wi_2008 .ecuatorial' , 'fadeInLeft' , ( delay + 0 ) );
            animate('.wi_2008 .circle' , 'rollIn' , ( delay + 250 ) );
            animate('.wi_2008 .entry-year' , 'flipInX' , ( delay + 750 ) );
            animate('.wi_2008 .seguridad' , 'flipInX' , ( delay + 1250 ) );
            animate('.wi_2008 .solvencia' , 'flipInX' , ( delay + 1750 ) );
            animate('.wi_2008 .clientes' , 'flipInX' , ( delay + 2250 ) );
        }
        function init2013( delay ) {
            animate('.wi_2013 .ecuatorial' , 'fadeInLeft' , ( delay + 0 ) );
            animate('.wi_2013 .circle' , 'rollIn' , ( delay + 250 ) );
            animate('.wi_2013 .entry-year' , 'flipInX' , ( delay + 750 ) );
            animate('.wi_2013 .facturacion' , 'flipInX' , ( delay + 1250 ) );
            animate('.wi_2013 .clientes' , 'flipInX' , ( delay + 1750 ) );
            animate('.wi_2013 .departamentos' , 'flipInX' , ( delay + 2250 ) );
        }
        function init2015( delay ) {
            animate('.wi_2015 .ecuatorial' , 'fadeInLeft' , ( delay + 0 ) );
            animate('.wi_2015 .circle' , 'rollIn' , ( delay + 250 ) );
            animate('.wi_2015 .entry-year' , 'flipInX' , ( delay + 750 ) );
            animate('.wi_2015 .plataforma' , 'flipInX' , ( delay + 1250 ) );
        }
        function init2018( delay ) {
            animate('.wi_2018 .ecuatorial' , 'fadeInLeft' , ( delay + 0 ) );
            animate('.wi_2018 .circle' , 'rollIn' , ( delay + 250 ) );
            animate('.wi_2018 .entry-year' , 'flipInX' , ( delay + 750 ) );
            animate('.wi_2018 .incremento' , 'flipInX' , ( delay + 1250 ) );
        }
        function init2019( delay ) {
            animate('.wi_2019 .ecuatorial' , 'fadeInLeft' , ( delay + 0 ) );
            animate('.wi_2019 .circle' , 'rollIn' , ( delay + 250 ) );
            animate('.wi_2019 .entry-year' , 'flipInX' , ( delay + 750 ) );
            animate('.wi_2019 .tecnologico' , 'flipInX' , ( delay + 1250 ) );
            animate('.wi_2019 .inteligencia' , 'flipInX' , ( delay + 1750 ) );
        }
        if ( window.md.phone() ) {
            $(window).scroll(function() {
                var h = $(window).scrollTop();
                console.log( h )
                if ( h > 399 ) {
                    init1999( 0 )
                }
                if ( h > 750 ) {
                    init2002( 250 )
                }
                if ( h > 1300 ) {
                    init2008( 250 )
                }
                if ( h > 1750 ) {
                    init2013( 250 )
                }
                if ( h > 2550 ) {
                    init2015( 250 )
                }
                if ( h > 2800 ) {
                    init2018( 250 )
                }
                if ( h > 3300 ) {
                    init2019( 250 )
                }
            });

        } else {
            $(window).scroll(function() {
                var h = $(window).scrollTop();
                console.log( h )
                if ( h > 250 || window.innerWidth > 1600 ) {
                    init1999( 0 )
                    init2002( 2500 )
                    init2008( 5000 )
                }
            });

        }
        var posCanvas = 0;
        var xCanvas = 0;

        $('button.btn-canvas-next').on( 'click' , function(){
            if ( posCanvas < 5 ) {
                posCanvas++;
                var x = $('.we-item:nth-child('+posCanvas+')').width()
                xCanvas += ( ( x - 60 ) * -1 )
                $('.we-canvas .we-inner').animate({ marginLeft : xCanvas + 'px' })
                switch ( posCanvas ) {
                    case 2:
                        init2013(250)
                        break;
                    case 3:
                        init2015(250)
                        break;
                    case 4:
                        init2018(250)
                        break;
                    case 5:
                        init2019(250)
                        break;
                }
            }
        })
        $('button.btn-canvas-prev').on( 'click' , function(){
            if ( posCanvas ) {
                var x = $('.we-item:nth-child('+posCanvas+')').width()
                xCanvas -= ( ( x - 60 ) * -1 )
                $('.we-canvas .we-inner').animate({ marginLeft : xCanvas + 'px' })
                posCanvas--;
            }
        })

    })
</script>
@endsection