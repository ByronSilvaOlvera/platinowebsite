<div class="quotation sidenav-quotation" style="display: none;">
    <div class="header">
        <a class="btn-cancel closeQuotation">
            <i class="mdi mdi-close"></i>
        </a>
        <div class="_title">
            <div class="text">
                <div class="title">Cotiza con nosotros</div>
            </div>
            <div class="icon">
                <i class="mdi mdi-email"></i>
            </div>
        </div>
    </div>
    <div class="content">
        <form class="form-contact" autocomplete="off" action="{{ url('/quotation') }}" method="POST">
            <div class="form-group">
                <input type="text" name="name" required="required" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Nombre completo">
            </div>
            <div class="form-group">
                <input type="email" name="email" required="required" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico">
            </div>
            <div class="form-group">
                <input type="text" name="telephone" required="required" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Teléfono">
            </div>
            <div class="form-group">
                <input type="text" name="subject" required="required" class="form-control" id="phone" aria-describedby="subjectHelp" placeholder="¿Qué servicio deseas cotizar?">
            </div>
            <div class="form-group">
                @include('Front.layout.spam')
                <textarea name="message" required="required" rows="4" class="form-control" aria-describedby="messageHelp" placeholder="Detalle"></textarea>
            </div>
            <div class="text-center">
                <div class="alert-success" style="display: none;">
                    <p>¡Gracias!<br/>En breve recibiras la cotización.</p>
                </div>
                <button class="btn submit" type="submit">ENVIAR</button>
            </div>
        </form>
    </div>
</div>