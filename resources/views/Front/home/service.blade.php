
    <div class="select-services">
        <div class="container">
            <h3 class="section-title">Servicios</h3>
            <div class="list-services">
                <div class="icon-box icon-create">
                    <a class="icon btn-service btn-logistic" tab="logistic">
                        <div class="light"></div>
                        <i class="icon-logistic"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" viewBox="0 0 100 100">
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#0038f1" />
                                <stop offset="100%" stop-color="#00b1b6" />
                                </linearGradient>
                            </defs>
                            <circle class="path path-1" cx="50" cy="50" r="47" stroke="url(#gradient)" stroke-width="2" fill="none" transform='rotate(0 50 50)'/>
                        </svg>
                    </a>
                    <h6>Logística</h6>
                </div>
                <div class="icon-box icon-create">
                    <a class="icon btn-service btn-im" tab="im">
                        <div class="light"></div>
                        <i class="icon-rank"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" viewBox="0 0 100 100">
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#0038f1" />
                                <stop offset="100%" stop-color="#00b1b6" />
                                </linearGradient>
                            </defs>
                            <circle class="path path-2" cx="50" cy="50" r="47" stroke="url(#gradient)" stroke-width="2" fill="none" transform='rotate(0 50 50)'/>
                        </svg>
                    </a>
                    <h6>Inteligencia de mercado</h6>
                </div>
                <div class="icon-box icon-create">
                    <a class="icon btn-service btn-creative" tab="creative">
                        <div class="light"></div>
                        <i class="icon-creative"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" viewBox="0 0 100 100">
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="#0038f1" />
                                    <stop offset="100%" stop-color="#00b1b6" />
                                </linearGradient>
                            </defs>
                            <circle class="path path-3" cx="50" cy="50" r="47" stroke="url(#gradient)" stroke-width="2" fill="none" transform='rotate(0 50 50)'/>
                        </svg>
                    </a>
                    <h6>Creativo</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="service-tab service-logistic" style="display:none;">
        @include('Front.home.service-logistic')
    </div>
    
    @include('Front.home.service-im')
    {{-- BEGIN CREATIVE SERVICE --}}
    @include('Front.home.service-creative')
    {{-- END CREATIVE SERVICE --}}