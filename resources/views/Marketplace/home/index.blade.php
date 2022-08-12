@extends('Marketplace.master')
@section('content')
<div class="marketplace-main">
	<div class="products d-flex flex-row flex-wrap align-items-start">
		@foreach( $category2 as $group )
		<a data-toggle="modal" data-target="#modalProduct{{ $group->id }}" class="product" data-id="{{ $group->id }}">
			<div class="over d-flex align-items-center  justify-content-center">
				<i class="pt-icon-magnifying-glass"></i>
			</div>
			<img src="{{ asset('imgs/marketplace/category/'.$group->image) }}?ver=1.0" alt="{{ $group->name }}">
		</a>
		@endforeach
		<a data-toggle="modal" data-target="#modalProductAlimentos" class="product" >
			<div class="over d-flex align-items-center  justify-content-center">
				<i class="pt-icon-magnifying-glass"></i>
			</div>
			<img src="{{ asset('imgs/marketplace/category/alimentos.jpg') }}" alt="">
		</a>
	</div>
</div>
@foreach( $category2 as $group )

<div class="modal modalProduct fade" id="modalProduct{{ $group->id }}" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="modalProductLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{{ $group->name }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-5 col-xs-12">
						<img src="{{ asset('imgs/marketplace/category/'.$group->image) }}" class="img" alt="{{ $group->name }}">
					</div>
					<div class="col-sm-7 col-xs-12">
						@switch( $group->id )
                            @case( 4 )


                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <h6 class="text-center">Teléfonos de contacto</h6>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 text-center">
                                        <a href="{{ $share['url_phone_02'] . $share_text['insumos'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_02'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_04'] . $share_text['insumos'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_04'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_05'] . $share_text['insumos'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_05'] }}</span>
                                        </a>
                                    </div>
                                </div>
								@break
							@case( 5 )

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
										<h5 class="text-center">Cobertura Guayas</h5>
                                        <h6 class="text-center">Teléfonos de contacto</h6>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 text-center">
                                        <a href="{{ $share['url_phone_02'] . $share_text['logistics'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_02'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_04'] . $share_text['logistics'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_04'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_05'] . $share_text['logistics'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_05'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_06'] . $share_text['logistics'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_06'] }}</span>
                                        </a>
                                    </div>
                                </div>
								@break
							@case( 6 )
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <h6 class="text-center">Teléfonos de contacto</h6>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 text-center">
                                        <a href="{{ $share['url_phone_02'] . $share_text['cabinas'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_02'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_04'] . $share_text['cabinas'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_04'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_05'] . $share_text['cabinas'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_05'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_06'] . $share_text['cabinas'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_06'] }}</span>
                                        </a>
                                    </div>
                                </div>
								@break
							@case( 12 )
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <h6 class="text-center">Teléfonos de contacto</h6>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 text-center">
                                        <a href="{{ $share['url_phone_02'] . $share_text['cabinas'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_02'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_04'] . $share_text['cabinas'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_04'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_05'] . $share_text['cabinas'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_05'] }}</span>
                                        </a>
                                        <a href="{{ $share['url_phone_06'] . $share_text['cabinas'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                            <i class="mdi mdi-whatsapp"></i>
                                            <span class="text">{{ $share['phone_06'] }}</span>
                                        </a>
                                    </div>
                                </div>
								@break
							@default

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <h6 class="text-center">Teléfonos de contacto</h6>
                                </div>
                                <div class="col-xs-12 col-sm-12 text-center">
                                    <a href="{{ $share['url_phone_01'] . $share_text['productos'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                        <i class="mdi mdi-whatsapp"></i>
                                        <span class="text">{{ $share['phone_01'] }}</span>
                                    </a>
                                    <a href="{{ $share['url_phone_02'] . $share_text['productos'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                        <i class="mdi mdi-whatsapp"></i>
                                        <span class="text">{{ $share['phone_02'] }}</span>
                                    </a>
                                    <a href="{{ $share['url_phone_03'] . $share_text['productos'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
                                        <i class="mdi mdi-whatsapp"></i>
                                        <span class="text">{{ $share['phone_03'] }}</span>
                                    </a>
                                </div>
                            </div>
								@break
						@endswitch
						@if ( count( $group->product ) )
						<div class="list-product">
							<table cellspacing="0" border="0" cellpadding="0">
								<thead>
									<tr>
										<th colspan="3">{{ $group->name }}</th>
									</tr>
								</thead>
								<tbody>
									@foreach( $group->product as $product )
									<tr>
										<td>{{ $product->name }}</td>
										<td>{{ $product->description }}</td>
										<td>$ {{ $product->price }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach

<div class="modal modalProduct fade" id="modalProductAlimentos" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="modalProductLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Alimentos</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-5 col-xs-12">
						<img src="{{ asset('imgs/marketplace/category/alimentos.jpg') }}" class="img" alt="">
					</div>
					<div class="col-sm-7 col-xs-12">

						<div class="row">
                            <div class="col-xs-12 col-sm-12">
								<h6 class="text-center">Teléfonos de contacto</h6>
                            </div>
							<div class="col-xs-12 col-sm-12 text-center">
								<a href="{{ $share['url_phone_01'] . $share_text['productos'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
									<i class="mdi mdi-whatsapp"></i>
									<span class="text">{{ $share['phone_01'] }}</span>
								</a>
								<a href="{{ $share['url_phone_02'] . $share_text['productos'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
									<i class="mdi mdi-whatsapp"></i>
									<span class="text">{{ $share['phone_02'] }}</span>
                                </a>
								<a href="{{ $share['url_phone_03'] . $share_text['productos'] }}" target="_blank" class="btn m-3 btn-success btn-lg">
									<i class="mdi mdi-whatsapp"></i>
									<span class="text">{{ $share['phone_03'] }}</span>
								</a>
							</div>
						</div>
						<div class="list-product">
							@foreach( $category as $group )
							<table cellspacing="0" border="0" cellpadding="0">
								<thead>
									<tr>
										<th colspan="3">{{ $group->name }}</th>
									</tr>
								</thead>
								<tbody>
									@foreach( $group->product as $product )
									<tr>
										<td>{{ $product->name }}</td>
										<td>{{ $product->description }}</td>
										<td>$ {{ $product->price }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="scroll"><img src="{{ asset('imgs/marketplace/scroll.png') }}" alt=""></div>

<script>
	var products = {!! json_encode($category2) !!};
	var productosAlimentos = {!! json_encode($category) !!};

</script>
<style>
.scroll {
	position: fixed;
	bottom: 20px;
	right: 0;
	width: 100px;
	height: auto;
	animation-name: bounce;
	animation-name: bounce;
	animation-duration: 1s;
  animation-iteration-count: infinite;
}
@keyframes bounce {
  0% {bottom: 15px;}
  50% {bottom: 30px;}
  100% {bottom: 15px;}
}
.scroll  img {
		display: block;
		max-width: 100%;
		height: auto;
}
</style>
@endsection
@section('extraJs')
<script>
	$('#modalProduct').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var pId = button.data('p_id') // Extract info from data-* attributes
		var product = {}
		products.forEach( function( data ) {
			if ( data.id == pId ) {
				product = data
			}
		} )
		var modal = $(this)
		modal.find()
		modal.find('.photo-product').attr('src', product.image_url )
		modal.find('.title-product').text( product.name )
		modal.find('.stock span').text( product.price )
		modal.find('.btn-01').attr('href', product.share.url_phone_01 )
		modal.find('.btn-02').attr('href', product.share.url_phone_02 )
		modal.find('.btn-01 .text').text( product.share.phone_01 )
		modal.find('.btn-02 .text').text( product.share.phone_02 )

		modal.find('.description').html( product.description )
		console.log( product )
		modal.find('.modal-title').text('New message to ' + product.name)
		modal.find('.modal-body input').val(product.stock)
	})
</script>
@endsection
