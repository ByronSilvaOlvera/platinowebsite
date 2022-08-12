@extends('Front.master')
@section('content')
<section class="section banner">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-sm-12">
                <h4 class="title">Gestores al 2029:</h4>
                <h2>Escuela trade</h2>
                <p>Te llevamos al siguiente nivel. Acompañarte en tu formación <br/>profesional es parte de nuestra visión.</p>
                <div class="question">¿Quiéres conocer más?</div>
                <button class="btn btn-register" type="button" data-toggle="modal" data-target="#exampleModalCenter">Regístrate</button>
            </div>
        </div>
    </div>
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/imagenes/escuela-trade/escuela-trade-01.jpg') }}" class="d-block w-100" alt="Escuela trade 01">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/imagenes/escuela-trade/escuela-trade-02.jpg') }}" class="d-block w-100" alt="Escuela trade 01">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/imagenes/escuela-trade/escuela-trade-03.jpg') }}" class="d-block w-100" alt="Escuela trade 01">
            </div>
        </div>
    </div>

</section>
<section class="section articles">
    <div class="container">
        <div class="main">
            <h3>¿Cuál es la razón de esta escuela trade?</h3>
            <p>Creemos en que el crecimiento de nuestro país esta basado en la ética integral, la educación y la generación de trabajo de calidad, hemos aceptado ser parte del reto y asumido el compromiso de la formación de nuestra gente.</p>
            <h5>Testimoniales</h5>
        </div>
        <article class="row article">
            <div class="col-auto" data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/supervisor-gustavo-castro-testimonio">
                <div class="image">
                    <img src="{{ asset('video/testimonios/supervisor-gustavo-castro-testimonio.gif') }}">
                </div>
                <i class="mdi mdi-play-circle"></i>
            </div>
            <div class="col">
                <h3 data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/supervisor-gustavo-castro-testimonio">¿Consideras que el aprendizaje experimental te ha ayudado a ser más efectivo en tu trabajo?</h3>
                <p>El aprendizaje nos ayuda a ser muchos más efectivos en nuestro trabajo. La experiencia y el aprendizaje diario cuando hacemos la supervisión en cada punto de venta nos ayuda a crear nuevas estrategias, mejorando cada día nuestra labor.</p>
                <span class="author">Gustavo Castro</span>
            </div>
        </article>
        <article class="row article">
            <div class="col-auto" data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/mercadista-monica-arellano-testimonio">
                <div class="image">
                    <img src="{{ asset('video/testimonios/mercadista-monica-arellano-testimonio.gif') }}">
                </div>
                <i class="mdi mdi-play-circle"></i>
            </div>
            <div class="col">
                <h3 data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/mercadista-monica-arellano-testimonio">¿Cómo ha sido tu formación profesional durante este tiempo?</h3>
                <p>Ha sido muy gratificante ya que cada local para mí ha sido una experiencia, cada marca una escuela. He ido creciendo en todos los aspectos, gracias a la ayuda de todos los que conforman el equipo de Platino Marketing Promocional</p>
                <span class="author">Mónica Arellano</span>
            </div>
        </article>
        <article class="row article">
            <div class="col-auto" data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/mercadista-orlando-mendoza-testimonio">
                <div class="image">
                    <img src="{{ asset('video/testimonios/mercadista-orlando-mendoza-testimonio.gif') }}">
                </div>
                <i class="mdi mdi-play-circle"></i>
            </div>
            <div class="col">
                <h3 data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/mercadista-orlando-mendoza-testimonio">¿Qué características posee un Mercaderista de Platino que lo diferencia del resto?</h3>
                <p>Las características normales de un Mercaderista son: La puntualidad, la responsabilidad y la imagen. Pero, el Mercaderista de Platino tiene mucho más, que es ser proactivo. Ser proactivo, es entregar un excelente merchandising, tener soluciones y repuestas para cada inconveniente presentado en un punto de venta para obtener buenos resultados</p>
                <span class="author">Orlando Mendoza</span>
            </div>
        </article>
        <article class="row article">
            <div class="col-auto" data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/vendedor-wilson-flores-testimonio">
                <div class="image">
                    <img src="{{ asset('video/testimonios/vendedor-wilson-flores-testimonio.gif') }}">
                </div>
                <i class="mdi mdi-play-circle"></i>
            </div>
            <div class="col">
                <h3 data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/vendedor-wilson-flores-testimonio">¿Qué características posee un vendedor de Platino que lo diferencia del resto?</h3>
                <p>Brindamos a nuestros clientes un servicio de excelencia enfocándonos en lo que desea y necesita el cliente para satisfacer sus necesidades</p>
                <span class="author">Wilson Flores</span>
            </div>
        </article>
        <article class="row article">
            <div class="col-auto" data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/impulsadora-ana-tabarez-testimonio">
                <div class="image">
                    <img src="{{ asset('video/testimonios/impulsadora-ana-tabarez-testimonio.gif') }}">
                </div>
                <i class="mdi mdi-play-circle"></i>
            </div>
            <div class="col">
                <h3 data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/impulsadora-ana-tabarez-testimonio">¿Consideras que Platino te ha hecho partícipe de grandes proyectos?</h3>
                <p>Claro que sí, porque me ha tocado trabajar con marcas nacionales y multinacionales de las cuales me han portado muchísimo a mi conocimiento laboral tales como: Nestlé, La Fabril, Unilever y actualmente con Agripac.</p>
                <span class="author">Ana Tabares</span>
            </div>
        </article>
        <article class="row article">
            <div class="col-auto" data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/testimonial-bic-impulsadora-astrid-sarango">
                <div class="image">
                    <img src="{{ asset('video/testimonios/testimonial-bic-impulsadora-astrid-sarango.gif') }}">
                </div>
                <i class="mdi mdi-play-circle"></i>
            </div>
            <div class="col">
                <h3 data-toggle="modal" data-target="#modalVideoSchool" data-video="testimonios/testimonial-bic-impulsadora-astrid-sarango">¿Cuál ha sido tu experiencia como impulsadora?</h3>
                <p>Mi experiencia como impulsadora ha sido muy bonita ya que me ha ayudado a crecer en el ámbito personal, laboral, familiar y aprender más sobre mi trabajo.</p>
                <span class="author">Astrid Sarango</span>
            </div>
        </article>
    </div>
</section>
@include('Front.school.modal')
@include('Front.school.modal-video')
@endsection