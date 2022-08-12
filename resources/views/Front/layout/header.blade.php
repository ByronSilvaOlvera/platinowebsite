<header class="page-header">
    <div class="header-wrap">
        <button class="btn btn-menu d-block d-sm-none">
            <i class="mdi mdi-36px mdi-menu"></i>
        </button>
        <a href="{{ route('front.index') }}" class="logo-link">
            <img src="{{ asset( $pageLogo ) }}?ver=1.0" alt="Logotipo - Platino Marketing Promocional">
        </a>
        <a class="add-event btnCalendar">
            <div class="text">
                <div class="title">Agenda una reunión</div>
                <span class="sub">con un asesor de ventas.</span>
            </div>
            <div class="icon">
                <i class="icon-calendar"></i>
            </div>
        </a>
        <menu class="menu">
            <nav class="nav">
                <ul class="list">
                    <li class="{{ isset( $menu['home'] ) ? $menu['home'] :'' }}">
                        <a href="{{ route('front.index') }}">Inicio</a>
                    </li>
                    <li class="{{ isset( $menu['about'] ) ? $menu['about'] :'' }}">
                        <a href="{{ route('front.about') }}">Nosotros</a>
                    </li>
                    <li class="{{ isset( $menu['service'] ) ? $menu['service'] :'' }}">
                        <a class="moveService" href="{{ url('/#service') }}">Servicios</a>
                    </li>
                    <li class="{{ isset( $menu['policies'] ) ? $menu['policies'] : '' }}">
                        <a href="{{ route('front.policies') }}">Políticas/Certificaciones</a>
                    </li>
                    <li class="{{ isset( $menu['coverage'] ) ? $menu['coverage'] : '' }}">
                        <a href="{{ route('front.coverage') }}">Cobertura</a>
                    </li>
                    <li class="{{ isset( $menu['school'] ) ? $menu['school'] : '' }}">
                        <a href="{{ route('front.school') }}">Escuela Trade</a>
                    </li>
                    <li class="{{ isset( $menu['ptsmart'] ) ? $menu['ptsmart'] : '' }}">
                        <a href="https://business.promogaza.com" target="_blank">Pt Smart</a>
                    </li>
                </ul>
            </nav>
        </menu>
    </div>
</header>