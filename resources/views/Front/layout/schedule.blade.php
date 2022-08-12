<div class="schedule sidenav-schedule" style="display: none;">
    <div class="header">
        <a class="btn-cancel closeCalendar">
            <i class="mdi mdi-close"></i>
        </a>
        <a class="add-event">
            <div class="text">
                <div class="title">Agenda una reunión</div>
                <span class="sub">¡Es un placer atenderte!</span>
            </div>
            <div class="icon">
                <i class="icon-calendar"></i>
            </div>
        </a>
    </div>
    <div class="content">
        <form class="form-contact" autocomplete="off" action="{{ url('/schedule') }}" method="POST">
            <div class="form-group">
                <input type="text" name="name" required="required" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Nombre completo">
            </div>
            <div class="form-group">
                <input type="email" name="email" required="required" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico">
            </div>
            <div class="input-group">
                <input type="text" name="date" required="required" class="datepicker-here form-control" id="date_schedule" placeholder="Seleccionar fecha" />
                <div class="input-group-append">
                    <label class="input-group-text" for="date_schedule">
                        <i class="mdi mdi-calendar"></i>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="telephone" required="required" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Teléfono">
            </div>
            <div class="form-group">
                <select name="service" class="form-control chosen-select" data-placeholder="Servicios"  required="required">
                    <option value=""></option>
                    <option value="Activaciones BTL">Activaciones BTL</option>
                    <option value="Talento Humano">Talento Humano</option>
                    <option value="Logística">Logística</option>
                    <option value="Compras">Compras</option>
                    <option value="Inteligencia de mercado">Inteligencia de mercado </option>
                    <option value="PT Smart">PT Smart</option>
                    <option value="Gráfica/Digital">Gráfica/Digital</option>
                    <option value="Escuela de Trade">Escuela de Trade</option>
                </select>
            </div>
            <div class="form-group">
                @include('Front.layout.spam')
                <textarea name="message" id="message" required="required" rows="4" class="form-control" aria-describedby="messageHelp" placeholder="Escribe un mensaje"></textarea>
            </div>
            <div class="text-center">
                <div class="alert-success" style="display: none;">
                    <p>Gracias por contactarnos.<br/>Tu solicitud ha sido enviada.</p>
                </div>
                <button class="btn submit" type="submit">Programar</button>
            </div>
        </form>
    </div>
</div>