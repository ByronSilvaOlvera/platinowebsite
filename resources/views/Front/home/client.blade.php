<section class="section section-clients">
    <div class="legend">
        <div class="text">
            <p>Acompañamos a <span>NUESTROS CLIENTES</span> en su objetivo de incrementar el consumo de sus marcas on – off premise. </p>
        </div>
    </div>
    <div class="slicky-box">
        <div class="slicky">
            @foreach( $clients as $row )
            <div class="thumb">
                <img class="client lazy-client" 
                    data-lazy="{{ asset('/imagenes/clientes/'. $row['slug'] .'.jpg') }}" 
                    alt="{{ $row['name'] }}">
            </div>
            @endforeach
        </div>
    </div>
</section>