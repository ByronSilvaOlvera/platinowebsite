@extends('Front.master')
@section('content')
<div class="sideright-widgets-social">
    <a href="https://wa.me/5930993866107?text=Saludos,%20deseo%20cotizar:" target="_blank">
        <i class="mdi mdi-whatsapp"></i>
    </a>
    <a href="https://ec.linkedin.com/company/platinomkt" target="_blank">
        <i class="mdi mdi-linkedin"></i>
    </a>
    <a href="https://www.facebook.com/platinomkt" target="_blank">
        <i class="mdi mdi-facebook"></i>
    </a>
</div>
@include('Front.home.slider')
<div class="box-sitemap">
    <div id="sitemap-over">
        <div class="site-icon" position="1">
            <div class="icon" data-toggle="tooltip" data-placement="right" title="Inicio">
            </div>
            <div class="line"></div>
        </div>
        <div class="site-icon" position="2">
            <div class="icon" data-toggle="tooltip" data-placement="right" title="Objetivo">
            </div>
            <div class="line"></div>
        </div>
        <div class="site-icon" position="3">
            <div class="icon" data-toggle="tooltip" data-placement="right" title="Servicios">
            </div>
            <div class="line"></div>
        </div>
        <div class="site-icon" position="4">
            <div class="icon" data-toggle="tooltip" data-placement="right" title="Activaciones">
            </div>
            <div class="line"></div>
        </div>
        <div class="site-icon" position="5">
            <div class="icon" data-toggle="tooltip" data-placement="right" title="Pie de página">
            </div>
        </div>
    </div>
</div>
<section class="section section-objective">
    <div class="container">
        <h3 class="section-title">Objetivo</h3>
        <p>Incrementamos el consumo de marcas o desarrollamos los canales de distribución de productos y servicios de empresas nacionales y multinacionales.</p>
        <div class="icons">
            <div class="icon-box icon-create">
                <i class="icon-science"></i>
                <h6>Creamos</h6>
            </div>
            <div class="icon-box icon-create">
                <i class="icon-space"></i>
                <h6>Impulsamos</h6>
            </div>
            <div class="icon-box icon-create">
                <i class="icon-core"></i>
                <h6>Implementamos</h6>
            </div>
        </div>
        <h5>¡SOLUCIONES DE MARKETING!</h5>
    </div>
</section>
<section class="section section-services" id="service_">
    @include('Front.home.service')
</section>

<section class="section section-activities">
    <div class="container">
        <h3 class="section-title">Activaciones</h3>
    </div>
    @include('Front.home.video')
</section>
@include('Front.home.modal-video')
@include('Front.home.client')
@include('Front.layout.quotation')
@endsection

@section('extraJs')
<script>
      
$(document).ready(function(){

    $('#sitemap-over .site-icon').on( 'click', function() {
        var that = $(this)
        console.log( that.attr('position') )
        var position = parseInt( that.attr('position') )
        switch( position ) {
            case 1 :
                $('html, body').stop().animate({
                    scrollTop : 0
                }, 500)
                break;
            case 2 :
                $('html, body').stop().animate({
                    scrollTop : $('section.section-objective').offset().top
                }, 500)
                break;
            case 3 :
                $('html, body').stop().animate({
                    scrollTop : $('section.section-services').offset().top
                }, 500)
                break;
            case 4 :
                $('html, body').stop().animate({
                    scrollTop : $('section.section-activities').offset().top
                }, 500)
                break;
            case 5 :
                $('html, body').stop().animate({
                    scrollTop : $('footer.footer').offset().top
                }, 500)
                break;
        }
    } )
    
    $('.site-icon .icon').tooltip()
    // lazyLoad()
    setTimeout( function() {
        $(".slicky").slick({
            lazyLoad: 'ondemand',
            slidesToShow: 8,
            slidesToScroll: 1,
            autoplay: true,
            centerPadding: '60px',
            autoplaySpeed: 2000,
            variableWidth: true,
            prevArrow : '<button type="button" class="btn btn-prev"><i class="mdi mdi-chevron-left"></i></button>',
            nextArrow : '<button type="button" class="btn btn-next"><i class="mdi mdi-chevron-right"></i></button>'
        });
    }, 500)
	$(".slicky-video").slick({
		slidesToShow: 4,
        lazyLoad: 'ondemand',
		slidesToScroll: 4,
		autoplay: true,
        centerPadding: '0px',
        dots: true,
		autoplaySpeed: 4000,
		prevArrow : '<button type="button" class="button btn-prev"><i class="mdi mdi-chevron-left"></i></button>',
        nextArrow : '<button type="button" class="button btn-next"><i class="mdi mdi-chevron-right"></i></button>',
        
        responsive: [
            {
                breakpoint: 1021,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
	});
    function goToService() {
        $('html, body').delay(250).animate({
            scrollTop: $('#service_' ).offset().top
        }, 500);
        setTimeout( function() {
            $('.btn-logistic').click()
        } , 1000 )
    }
    $('#particles-js').on('click', goToService )
	if ( window.location.hash ) {
		if ( window.location.hash == '#service' ) {
            goToService()
		}
	}
    particlesJS.load('particles-js', 'particlesjs-config.json');
    $( window ).scroll(function() {
        var h = $(window).scrollTop();
        h += 350
        if ( h > $('footer.footer').position().top ) {
            $('#sitemap-over').removeClass().addClass('_5')
        } else if ( h > $('.section-activities').position().top ) {
            $('#sitemap-over').removeClass().addClass('_4')
        } else if ( h > $('.section-services').position().top ) {
            $('#sitemap-over').removeClass().addClass('_3')
        } else if ( h > $('.section-objective').position().top ) {
            $('#sitemap-over').removeClass().addClass('_2')
        } else  {
            $('#sitemap-over').removeClass()
        }
    });
});
</script>
@endsection