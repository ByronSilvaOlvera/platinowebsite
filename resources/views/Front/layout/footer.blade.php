<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="widget">
                    <h4>Matriz Guayaquil</h4>
                    <ul class="list">
                        <li>
                            <i class="mdi mdi-map-marker"></i>
                            <p><a href="https://www.google.com/maps/place/Platino+Marketing+Promocional/@-2.1722521,-79.9099434,15z/data=!4m2!3m1!1s0x0:0x1eead22ec62eeb1f?sa=X&ved=2ahUKEwjE6ovdgLjjAhUjuVkKHT9iChQQ_BIwD3oECAsQCA" target="_blank">Urdesa Central, Circunvalación Sur
                                Nº 410 y Ébanos.</a></p> 
                        </li>
                        <li>
                            <i class="mdi mdi-phone"></i>
                            <p><a href="tel:+59342610459">(04) 2 610 459</a></p> 
                            <p><a href="tel:+593993866107">+593 99 386 6107</a></p>
                        </li>
                        <li>
                            <i class="mdi mdi-email"></i>
                            <p><a href="mailto:info@promogaza.com">info@promogaza.com</a></p> 
                        </li>
                        <li>
                            <i class="mdi mdi-alarm"></i>
                            <p>Lunes a Viernes: 08:30 a 17:30</p> 
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="widget">
                    <h4>Oficina Quito</h4>
                    <ul class="list">
                        <li>
                            <i class="mdi mdi-map-marker"></i>
                            <p> <a href="https://www.google.com/maps/place/Platino+Marketing/@-0.172861,-78.4798992,17z/data=!3m1!4b1!4m5!3m4!1s0x91d59a9ce604af2b:0x3dae632a9ca43cb3!8m2!3d-0.1728664!4d-78.4777105" target="_blank">El Heraldo E10_140 <br/> y El Día.</a>
                            </p> 
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4>Oficina Santo domingo</h4>
                    <ul class="list">
                        <li>
                            <i class="mdi mdi-map-marker"></i>
                            <p>Ambato y Zarahurco, frente al mercado municipal.</p> 
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget last">
                    <ul class="social">
                        <li>
                            <a href="https://ec.linkedin.com/company/platinomkt" target="_blank">
                                <i class="mdi mdi-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/platinomkt" target="_blank">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/platinomkt/" target="_blank">
                                <i class="mdi mdi-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/platinomkt" target="_blank">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                    <h5>¡Ahora más conectados!</h5>
                    <figure>
                        <a href="{{ route('front.policies') }}" class="logo-sgs">
                            <img src="{{ asset('imgs/logo-sgs-footer.png') }}" alt="SGS Auditoría Proveedores">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <ul class="sitemap">
        <li>
            <a href="{{ route('front.index') }}">Platino</a>
        </li>
        <li>
            <a class="moveService" href="{{ url('/#service') }}">Servicios</a>
        </li>
        <li>
            <a href="{{ route('front.coverage') }}">Cobertura</a>
        </li>
        <li>
            <a href="{{ route('front.school') }}">Escuela Trade</a>
        </li>
        <li>
            <a href="{{ route('front.contact') }}">Contáctenos</a>
        </li>
    </ul>
    <p class="copyright">© {{ date('Y') }} Platino Marketing Promocional</p>
</footer>