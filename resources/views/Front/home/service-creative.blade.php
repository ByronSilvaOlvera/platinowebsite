<div class="service-tab service-creative" style="display: none;">

    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="idea-tab" data-toggle="tab" href="#idea" role="tab" aria-controls="idea" aria-selected="true">Idea creativa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="graphic-tab" data-toggle="tab" href="#graphic" role="tab" aria-controls="graphic" aria-selected="false">Gráfica</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="digital-tab" data-toggle="tab" href="#digital" role="tab" aria-controls="digital" aria-selected="false">Digital</a>
            </li>
        </ul>
    </div>

    <div class="tab-content">
        <div class="tab-pane idea-tab fade show active" id="idea" role="tabpanel" aria-labelledby="idea-tab">
            <div class="tab-subheader">
                <div class="container">
                    <h3>Idea creativa</h3>
                    <p>Activaciones BTL que permitan la experiencia de la marca con el consumidor final alineados a los objetivos de las marcas.</p>
                </div>
            </div>
            <div class="tab-video">
                <div class="video">
                    <video width="100%" controls playsinline id="videoIdea">
                        <source  src="{{ asset('/video/btl-idea-creativa.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="tab-pane graphic-tab fade" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
            <div class="tab-subheader">
                <div class="container">
                    <h3>Gráfica</h3>
                    <p>Diseño gráfico de las propuestas creativas para las activaciones BTL como también de las piezas gráficas necesarias para actividades de trademarketing tales como:</p>
                </div>
            </div>
            <div class="tab-gallery">
                <div class="row justify-content-center">
                        @foreach ( $gallery as $galleryImage )
                        <div class="col-3">
                            <div class="box-gallery">
                                <img src="{{ asset('galeria/placeholder-gallery.png') }}" alt="Placeholder galería" class="placeholder">

                                <div class="list-gallery">
                                    @foreach ( $galleryImage->image as $img )
                                    <a href="{{ asset( 'galeria/' . $img['slug'] . '@2x.png' ) }}"  data-fancybox="{{ $galleryImage->slug }}" data-caption="{{ $img['name'] }}">
                                        @if ( $loop->index == 0 )
                                            <img class="lazy-gallery" 
                                                data-src="{{ asset( 'galeria/' . $galleryImage->slug. '.gif' ) }}" 
                                                data-srcset="{{ asset( 'galeria/'  . $galleryImage->slug. '.gif' ) }} 2x, {{ asset( 'galeria/'  . $galleryImage->slug. '.gif' ) }} 1x"
                                                alt="{{ $img['name'] }}">
                                        @else
                                            <img class="lazy-gallery" 
                                                data-src="{{ asset( 'galeria/' . $img['slug'] . '.png' ) }}" 
                                                data-srcset="{{ asset( 'galeria/' . $img['slug'] . '@2x.png' ) }} 2x, {{ asset( 'galeria/' . $img['slug'] . '.png' ) }} 1x"
                                                alt="{{ $img['name'] }}">
                                        @endif
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            <h4>
                                <a href="{{ asset( 'galeria/' . $galleryImage->image[0]['slug'] . '@2x.png' ) }}"  data-fancybox="{{ $galleryImage->slug }}" data-caption="{{ $galleryImage->image[0]['name'] }}">
                                    {{ $galleryImage->name }}
                                </a>
                            </h4>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
        <div class="tab-pane digital-tab fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
            <div class="tab-subheader">
                <div class="container">
                    <h3>Digital</h3>
                    <p>Diseñamos e implementamos tecnología interactiva en realidad virtual para enriquecer las actividades BTL desde otra experiencia sensorial entre las marcas y los consumidores finales.</p>
                </div>
            </div>
            <div class="tab-video">
                <div class="video">
                    <video width="100%" controls playsinline id="videoDigital" >
                        <source  src="{{ asset('/video/creativo-toni-100-activacion.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    @include('Front.home.service-widget')
</div>
@section('extraJs')
@parent
<script>

    
    
    $(function(){
        var $servCreative = $('.service-creative')

        $("[data-fancybox]").fancybox({
            afterShow: function( instance, slide ) {
            },
            afterClose: function( instance , slide ) {
            },
            btnTpl : {
                arrowLeft : '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="Anterior">' +
                    '<i class="mdi mdi-chevron-left"></i>' +
                    '</button>',
                    
                arrowRight : '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="Anterior">' +
                    '<i class="mdi mdi-chevron-right"></i>' +
                    '</button>'
            }
        });
    })
    $('#digital').on('show.bs.tab' ,  function(e){
        console.log( 'Listo digital' )
    })
    $('.service-creative a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
        console.log( $( e.target ).attr('href') )
        
    })
    $('.service-creative a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        switch ( $( e.target ).attr('href') ) {
            case '#idea':
                $('#videoDigital').get(0).pause()
                setTimeout( function(){
                    $('#videoIdea').get(0).play()
                } , 500 )
                break;
            case '#digital':
                $('#videoIdea').get(0).pause()
                setTimeout( function(){
                    $('#videoDigital').get(0).play()
                } , 500 )
                break;
            default:
                setTimeout( function(){
                    $('#videoDigital').get(0).pause()
                    $('#videoIdea').get(0).pause()
                } , 125 )
                break;
        }
        
    })


</script>
@endsection