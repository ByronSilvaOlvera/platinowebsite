<div class="modal  fade" id="myModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<a class="go-marketplace" href="{{ url('/marketplace') }}">
									<img src="{{ asset('/imgs/marketplace/modal-01.jpg') }}?stamp=1000001" class="img " alt="Modal 01">
								</a>
							</div>
							<div class="carousel-item">
								<a class="go-marketplace" href="{{ url('/marketplace') }}">
									<img src="{{ asset('/imgs/marketplace/modal-02.jpg') }}?stamp=1000001" class="img " alt="Modal 01">
								</a>
							</div>
							<div class="carousel-item">               
								<a class="go-marketplace" href="{{ url('/marketplace') }}">
									<img src="{{ asset('/imgs/marketplace/modal-03.jpg') }}?stamp=1000001" class="img " alt="Modal 01">
								</a>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
			</div>
			<div class="modal-footer text-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
<style>
		#myModal .go-marketplace {
				display: block;
		}
		#myModal .img {
				display: block;
				width: 100%;
				max-width: 100%;
				height: auto;
		}
</style>