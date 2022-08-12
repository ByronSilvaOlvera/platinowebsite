<div class="page-header">
	<div class="header-wrap d-flex justify-content-between">
		<img class="logo-banner" src="{{ asset('imgs/marketplace/banner-logo.png') }}" alt="Platino Marketplace logo">
		<img class="logo-banner" src="{{ asset('imgs/marketplace/banner-header-title.png') }}" alt="Platino Marketplace title">
		<menu class="menu">
			<a href="#" data-toggle="modal" data-target="#modalCompra">
				<i class="pt-icon-wallet"></i>
				<div class="text">¿Cómo comprar?</div>
			</a>
			<a href="#" data-toggle="modal" data-target="#modalCoberture">
				<i class="pt-icon-map"></i>
				<div class="text">Zonas de cobertura</div>
			</a>
		</menu>
	</div>
</div>

<div class="modal  fade" id="modalCoberture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
			<a class="go-marketplace" href="{{ url('/marketplace') }}">
				<img src="{{ asset('/imgs/marketplace/zonas-cobertura.jpg') }}?ver=1.0" class="img " alt="Modal 01">
				</a>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
<div class="modal  fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
			<a class="go-marketplace" href="{{ url('/marketplace') }}">
				<img src="{{ asset('/imgs/marketplace/modal-02.jpg') }}?ver=1.0" class="img " alt="Modal 01">
				</a>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
<style>

#modalCompra .img {
				display: block;
				width: 100%;
				max-width: 100%;
				height: auto;
		}
#modalCoberture .img {
				display: block;
				width: 100%;
				max-width: 100%;
				height: auto;
		}

</style>
