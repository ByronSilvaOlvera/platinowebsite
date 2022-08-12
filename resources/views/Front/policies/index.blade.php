@extends('Front.master')
@section('content')
<article>
    <div class="container">
        <h2>POLÍTICAS</h2>
        <p>
            PROMOGAZA CIA LTDA., dispone a todos sus clientes, proveedores, accionistas y trabajadores información sobre sus políticas empresariales. 
        </p>
    </div>
</article>
<section class="section files">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <a href="{{ url('archivos/politicas-promogaza.pdf') }}" download>
                    <img src="{{ asset('imgs/icono-pdf-download.png') }}" alt="Descargar politicas">
                    <h3>Políticas de <br/><span>PROMOGAZA CIA LTDA.</span></h3>
                </a>
            </div>
            <div class="col-auto">
                <div class="line"></div>
            </div>
            <div class="col-auto">
                <a href="{{ url('archivos/politica-cero-tolerancia-al-trabajo-infantil.pdf') }}" download>
                    <img src="{{ asset('imgs/icono-pdf-download.png') }}" alt="Descargar politicas">
                    <h3>Políticas de <br/><span>CERO TOLERANCIA AL TRABAJO INFANTIL</span></h3>
                </a>
            </div>
        </div>
    </div>
</section>
<article>
    <div class="container">
        <h2>CERTIFICACIONES</h2>
        <p>
            Brindamos servicio de calidad en todas nuestras áreas de servicio aplicado al mejoramiento continuo, cubriendo necesidades de nuestros clientes generando confianza y credibilidad.
        </p>
    </div>
</article>
<section class="section clients">
    <div class="container">
        <div class="row">
            <div class="col-auto col-xs-12">
                <figure>
                    <img src="{{ asset('imgs/logo-sgs.png') }}" srcset="{{ asset('imgs/logo-sgs@2x.png') }} 2x , {{ asset('imgs/logo-sgs.png') }} 1x " alt="SGS Auditoría Proveedores">
                </figure>
            </div>
            <div class="col-auto ">
                
                <div class="accordion" id="accordionClient">
                    <ul class="list">
                        <li>
                            <a data-toggle="collapse" data-target=".ol-list-1" aria-expanded="true">
                                CONSORCIO ECUATORIANO DE TELECOMUNICACIONES S.A. CONECEL 
                            </a>
                            <ol class="collapse show ol-list-1" data-parent="#accordionClient">
                                <li>
                                    Gestión comercial y calidad / Evaluación Financiera.
                                </li>
                                <li>
                                    Seguridad y Salud Ocupacional.
                                </li>
                                <li>
                                    Medio Ambiente.
                                </li>
                            </ol>
                        </li>
                        <li>
                            <a class="collapsed" data-toggle="collapse" data-target=".ol-list-2" aria-expanded="false">
                                NESTLÉ 
                            </a>
                            <ol class="collapse ol-list-2" data-parent="#accordionClient">
                                <li>
                                    Gestión comercial y calidad / Evaluación Financiera.
                                </li>
                                <li>
                                    Seguridad y Salud Ocupacional.
                                </li>
                                <li>
                                    Medio Ambiente.
                                </li>
                            </ol>
                        </li>
                        <li>
                            <a class="collapsed" data-toggle="collapse" data-target=".ol-list-3" aria-expanded="false">
                                KIMBERLY CLARK
                            </a>
                            <ol class="collapse ol-list-3" data-parent="#accordionClient">
                                <li>
                                    Gestión comercial y calidad / Evaluación Financiera.
                                </li>
                                <li>
                                    Seguridad y Salud Ocupacional.
                                </li>
                                <li>
                                    Medio Ambiente.
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection