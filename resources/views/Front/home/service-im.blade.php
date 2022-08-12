<div class="service-tab service-im" style="display:none;">
    <div class="tab-header">
        <div class="container">
            <h3>Inteligencia de Mercado</h3>
            <p>Es nuestra área especializada en revelar el comportamiento de los consumidores en los mercados de consumo masivo.</p>
            <p>Conocemos el mercado ecuatoriano por más 20 años, gestionando el manejo de estrategias de trade marketing de empresas multinacionales y nacionales en el país.</p>
        </div>
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="how-tab" data-toggle="tab" href="#how" role="tab" aria-controls="how" aria-selected="true">¿Cómo lo<br/>hacemos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="what-tab" data-toggle="tab" href="#what" role="tab" aria-controls="what" aria-selected="false">¿Qué<br/>medimos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Valor<br/>agregado</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane how-tab fade show active" id="how" role="tabpanel" aria-labelledby="th-tab">
            <article class="article">
                <div class="container">
                    <h3 class="title">¿Cómo lo hacemos?</h3>
                    <div class="bars">
                        <div class="group-bar one hidden">
                            <div class="bar">
                                <div class="bar-header hidden">
                                    <h5 class="hidden">Indicadores <br/>de pantalla</h5>
                                    <h6 class="hidden">Establecemos los indicadores a medir con nuestro cliente.</h6>
                                </div>
                                <div class="tap">
                                    <i class="icon-velocimeter hidden"></i>
                                </div>
                            </div>
                        </div>
                        <div class="group-bar two hidden">
                            <div class="bar">
                                <div class="bar-header hidden">
                                    <h5 class="hidden">Organización <br/>equipo de campo</h5>
                                    <h6 class="hidden">Armamos el personal de campo de acuerdo al perfil idóneo.</h6>
                                </div>
                                <div class="tap">
                                    <i class="icon-puzzle hidden"></i>
                                </div>
                            </div>
                        </div>
                        <div class="group-bar three hidden">
                            <div class="bar">
                                <div class="bar-header hidden">
                                    <h5 class="hidden">Investigación</h5>
                                    <h6 class="hidden">Ejecutamos el sondeo en el mercado.</h6>
                                </div>
                                <div class="tap">
                                    <i class="icon-investigation hidden"></i>
                                </div>
                            </div>
                        </div>
                        <div class="group-bar four hidden">
                            <div class="bar">
                                <div class="bar-header hidden">
                                    <h5 class="hidden">Resultados <br/>de la campaña</h5>
                                    <h6 class="hidden">Reportamos al cliente los resultados.</h6>
                                </div>
                                <div class="tap">
                                    <i class="icon-stars hidden"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </article>
        </div>
        <div class="tab-pane what-tab fade" id="what" role="tabpanel" aria-labelledby="th-tab">
            <article class="article">
                <div class="container">
                    <h3 class="title">¿Qué medimos?</h3>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <i class="icon-service-sale"></i>
                            <h5>Ventas</h5>
                            <p>Ventas totales por local, <br>por día y por producto.</p>
                        </div>
                        <div class="col-4">
                            <i class="icon-service-swap"></i>
                            <h5>Canjes</h5>
                            <p>Estado total de los canjes <br>efectuados por local.</p>
                        </div>
                        <div class="col-4">
                            <i class="icon-service-impact"></i>
                            <h5>Impactos</h5>
                            <p>Cantidad de personas que han <br>interactuado en la campaña.</p>
                        </div>
                        <div class="col-4">
                            <i class="icon-service-inventory"></i>
                            <h5>Inventario</h5>
                            <p>Estado al día de stock <br>inicial y final.</p>
                        </div>
                        <div class="col-4">
                            <i class="icon-service-implementation"></i>
                            <h5>Implementaciones</h5>
                            <p>Respaldo fotográfico antes y <br>después de las implementaciones.</p>
                        </div>
                        <div class="col-4">
                            <i class="icon-service-compare"></i>
                            <h5>Precios</h5>
                            <p>Comparativa de precios <br>de las marcas vs. competencia.</p>
                        </div>
                        <div class="col-4">
                            <i class="icon-service-insights"></i>
                            <h5>Insights</h5>
                            <p>Insights de las activaciones <br>y del mercado.</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="tab-pane add-tab fade" id="add" role="tabpanel" aria-labelledby="th-tab">
            <article class="article">
                <div class="container">
                    <h3 class="title">¿Cuál es el valor agregado?</h3>
                    <p>Creamos la plataforma digital PT Smart para que acceda a los resultados de su campaña al día que se ejecutan, otorgándole el poder de seguir el track del desempeño de la activación.</p>
                    <span class="more">Además</span>
                    <div class="row">
                        <div class="col-3 offset-3">
                            <p>Data lista para <br/>presentar a sus <br/> equipos.</p>
                        </div>
                        <div class="col-3">
                            <p>Reportería de <br/>fácil lectura.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p>Accede a la data <br/>en el presente <br/>y futuro.</p>
                        </div>
                        <div class="col-3 offset-6">
                            <p>Protección de <br/>información.</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        @include('Front.home.service-widget')
    </div>
</div>
@section('extraJs')
@parent
<script>
$(document).ready(function(){
    var initHow = false
    $('.section-services .service-im').hover(function() {
        if ( !initHow ) {
            initHow = true
            initAnimationHow()
        }
    });
    function initAnimationHow() {
        animate( '.bars .one' , 'fadeIn' , 750  ,'animation' )
        animate( '.bars .one .icon-velocimeter' , 'slideInDown' , 1000 )
        animate( '.bars .one .bar-header' , 'slideInDown' , 1250 )
        animate( '.bars .one h5' , 'rotateInDownLeft' , 1500 )
        animate( '.bars .one h6' , 'fadeInRight' , 1750 )
        
        animate( '.bars .two' , 'fadeIn' , 1750  ,'animation' )
        animate( '.bars .two .icon-puzzle' , 'slideInDown' , 2000 )
        animate( '.bars .two .bar-header' , 'slideInDown' , 2250 )
        animate( '.bars .two h5' , 'rotateInDownLeft' , 2500 )
        animate( '.bars .two h6' , 'fadeInRight' , 2750 )


        animate( '.bars .three' , 'fadeIn' , 2750  ,'animation' )
        animate( '.bars .three .icon-investigation' , 'slideInDown' , 3000 )
        animate( '.bars .three .bar-header' , 'slideInDown' , 3250 )
        animate( '.bars .three h5' , 'rotateInDownLeft' , 3500 )
        animate( '.bars .three h6' , 'fadeInRight' , 3750 )

        animate( '.bars .four' , 'fadeIn' , 3750  ,'animation' )
        animate( '.bars .four .icon-stars' , 'slideInDown' , 4000 )
        animate( '.bars .four .bar-header' , 'slideInDown' , 4250 )
        animate( '.bars .four h5' , 'rotateInDownLeft' , 4500 )
        animate( '.bars .four h6' , 'fadeInRight' , 4750 )

    }

    function animate( el , cls , time , extraClass = '') {
        setTimeout( function() {
            $( el ).removeClass('hidden').addClass(  'animated '+  cls ).delay(250).find('.bar').addClass( extraClass )
        } , time )
    }
});
</script>
@endsection