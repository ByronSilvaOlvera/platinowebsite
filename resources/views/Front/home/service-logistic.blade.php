<div class="container">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="th-tab" data-toggle="tab" href="#th" role="tab" aria-controls="th" aria-selected="true">Talento<br/>Humano</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="transport-tab" data-toggle="tab" href="#transport" role="tab" aria-controls="transport" aria-selected="false">Transporte</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="sale-tab" data-toggle="tab" href="#sale" role="tab" aria-controls="sale" aria-selected="false">Compras</a>
        </li>
    </ul>
</div>
<div class="tab-content">
    <div class="tab-pane th-tab fade show active" id="th" role="tabpanel" aria-labelledby="th-tab">
        <article class="article">
            <div class="video-bg">
                <video id="video_th" autoplay  playsinline  loop muted>
                    <source src="{{ asset('video/talento-humano.mp4') }}" type="video/mp4" />
                    <source src="{{ asset('video/talento-humano.webm') }}" type="video/webm" />
                </video>
                <div class="_color"></div>
                <div class="_over"></div>
            </div>
            <div class="container">
                <h3 class="title">Talento Humano</h3>
                <p class="description">Nuestro compromiso es el 100% del cumplimiento de la implementación, con personal formado y entrenado antes de cada operación BTL y de Trade marketing.</p>
            
                <span class="subtitle">Perfiles </span>
                <ul class="list">
                    <li class="active"> 
                        <a class="btn-profiles">Comerciales</a>
                        <ol class="group">
                            <li>Impulsadoras</li>  
                            <li>Mercaderistas</li>
                            <li>Degustadoras</li>
                            <li>Volanteadoras</li>
                            <li>Vendedores</li> 
                            <li>Asesores especializados</li>
                            <li>Promotores de ventas</li>
                            <li>Modelos</li>
                        </ol>
                    </li>
                    <li>
                        <a class="btn-profiles">Logístico</a>
                        <ol class="group">
                            <li>Brigadistas</li>
                            <li>Auxiliares logísticos</li>
                            <li>Encuestadores</li>
                        </ol>
                    </li>
                    <li>
                        <a class="btn-profiles">Profesional</a>
                        <ol class="group">
                            <li>Marketing / Trade marketing:
                                <ul>
                                    <li>Asistentes</li>
                                    <li>Pasantes</li>
                                </ul>
                            </li>
                            <li>Diseño:
                                <ul>
                                    <li>Asistentes</li>
                                    <li>Diseñador Gráfico</li>
                                </ul>
                            </li>
                        </ol>
                    </li>
                </ul>
            </div>
        </article>
        <section class="info-th">
            <div class="container">
                <h5 class="legend">Proceso de reclutamiento <i class="mdi mdi-chevron-down"></i></h5>
                <div class="row process">
                    <div class="col">
                        <img class="lazy" 
                            data-src="{{ asset('imgs/proceso-convocatoria.jpg') }}"
                            data-srcset="{{ asset('imgs/proceso-convocatoria@2x.jpg') }} 2x, {{ asset('imgs/proceso-convocatoria.jpg') }} 1x" alt="Proceso de convocatoria">
                        <h4>Convocatoria</h4>
                        <p>Invitación a través de redes laborales a participar en el proceso de selección.</p>
                    </div>
                    <div class="col">
                        <img class="lazy" 
                            data-src="{{ asset('imgs/proceso-reclutamiento.jpg') }}"
                            data-srcset="{{ asset('imgs/proceso-reclutamiento@2x.jpg') }} 2x, {{ asset('imgs/proceso-reclutamiento.jpg') }} 1x" alt="Proceso de reclutamiento">
                        <h4>Reclutamiento</h4>
                        <p>Agenda de entrevista a cada preseleccionada o acorde al cargo que aplica.</p>
                    </div>
                    <div class="col">
                        <img class="lazy" 
                            data-src="{{ asset('imgs/proceso-entrenamiento.jpg') }}"
                            data-srcset="{{ asset('imgs/proceso-entrenamiento@2x.jpg') }} 2x, {{ asset('imgs/proceso-entrenamiento.jpg') }} 1x" alt="Proceso de entrenamiento">
                        <h4>Entrenamiento</h4>
                        <p>Capacitación al equipo seleccionado de la marca que van a promocionar.</p>
                    </div>
                </div>
                <div class="row data-year">
                    <div class="col col-auto">
                        <div class="year">
                            2018
                        </div>
                    </div>
                    <div class="col">
                        <span class="year-title">Alcance</span>
                        <div class="data promotions">
                            <span class="bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </span>
                            <span class="amount">1.406</span>
                            <span class="text">Promociones</span>
                        </div>
                        <div class="data person">
                            <span class="bar">
                                <div class="progress">
                                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                </div>
                            </span>
                            <span class="amount">2.537</span>
                            <span class="text">Personas contratadas</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="tab-pane tansport-tab fade" id="transport" role="tabpanel" aria-labelledby="transport-tab">
        <article class="article">
            <div class="video-bg">
                <video id="video_transport"  autoplay  playsinline loop  muted>
                    <source src="{{ asset('video/transporte.mp4') }}" type="video/mp4" />
                    <source src="{{ asset('video/transporte.webm') }}" type="video/webm" />
                </video>
                <div class="_color"></div>
                <div class="_over"></div>
            </div>
            <div class="container">
                <h3 class="title">Transporte</h3>
                <p class="description">Organizamos movimientos logísticos, de transportación en general en todo el país, implementaciones y desmontajes de muebles, materiales publicitarios, souvernirs, muestras de productos a los canales de distribución: Tradicional, moderno y cobertura.</p>
            </div>
        </article>
    </div>
    <div class="tab-pane sale-tab fade" id="sale" role="tabpanel" aria-labelledby="sale-tab">
        <article class="article">
            <div class="video-bg">
                <video id="video_sale"  autoplay  playsinline loop  muted>
                    <source src="{{ asset('video/compras.mp4') }}" type="video/mp4" />
                </video>
                <div class="_color"></div>
                <div class="_over"></div>
            </div>
            <div class="container">
                <h3 class="title">Compras</h3>
                <h4>¿Alguna vez has estado en apuros por comprar el carro para el sorteo o las motos para la premiación?</h4>
                <p class="description">Hace 20 años entregamos la oportunidad de compra de activos  que complementan las actividades promocionales en su ejecución, para empresas nacionales y multinacionales.</p>
                <strong>Lo logramos mediante:</strong>
                <ul class="list">
                    <li>Negociación</li>
                    <li>Ejecución de pago.</li>
                </ul>
            </div>
        </article>
    </div>
    @include('Front.home.service-widget')
</div>