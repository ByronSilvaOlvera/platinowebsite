@extends('Front.master')
@section('content')
<section class="page-title">
    <span>Contáctenos</span>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Tu marca ha llegado a buenas manos</h5>
                <h6>Déjanos tus datos y nos comunicaremos contigo</h6>
            </div>
        </div>
        <form class="form-contact" action="{{ url('/contactenos') }}" method="POST" autocomplete="off">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" name="name" required="required" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Nombre completo">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" name="company" required="required" class="form-control" id="company" aria-describedby="companyHelp" placeholder="Empresa">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="email" name="email" required="required" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" name="telephone" required="required" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Teléfono">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" name="subject" required="required" class="form-control" id="subject" aria-describedby="subjectHelp" placeholder="Asunto">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea name="message" id="message" required="required" rows="4" class="form-control" aria-describedby="messageHelp" placeholder="Escribe un mensaje"></textarea>
                    </div>
                </div>
                @include('Front.layout.spam')
                <div class="col-12">
                    <div class="alert-success" style="display: none;">
                        <p>Gracias por escribirnos, nos comunicaremos contigo de inmediato.</p>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn submit" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection