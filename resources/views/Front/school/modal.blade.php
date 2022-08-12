<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-school">
            <form id="school" class="form-contact" action="{{ url('/escuela-trade') }}" method="POST">
            <div class="modal-body">
                <div class="col-10 offset-1">
                    <button type="button" class="btn-close" data-dismiss="modal">
                        <i class="mdi mdi-close-circle"></i>
                    </button>
                    <div class="legend">Regístrate para recibir mayor información</div>
                    <div class="form-group row">
                        <label  class="col-xs-12 col-sm-4 col-form-label">Nombre:</label>
                        <div class="col-xs-12 col-sm-8">
                            <input type="text" name="first_name" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-xs-12 col-sm-4 col-form-label">Apellido:</label>
                        <div class="col-xs-12 col-sm-8">
                            <input type="text" name="last_name" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-xs-12 col-sm-4  col-form-label">Empresa:</label>
                        <div class="col-xs-12 col-sm-8">
                            <input type="text" name="company" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-xs-12 col-sm-4  col-form-label">E-mail:</label>
                        <div class="col-xs-12 col-sm-8">
                            <input type="text" name="email" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-xs-12 col-sm-4  col-form-label">Celular:</label>
                        <div class="col-xs-12 col-sm-8">
                            @include('Front.layout.spam')
                            <input type="text" name="telephone" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-response">
                        <div class="alert-success" style="display: none;">
                            <p>Gracias por registrarte.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer row">
                <div class="btns col-10 offset-1 text-right">
                    <button type="submit" class="btn submit btn-lg btn-secondary">Enviar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>