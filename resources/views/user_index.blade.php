@extends('user_master')

@section('konten')

        <!-- SECTION -->
        <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{url('assets/produk/ASUS.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="{{url('/user/kategori/laptop')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{url('assets/produk/product3.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="{{url('/user/kategori/aksesoris')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{url('assets/produk/smartphone.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Smartphone<br>Collection</h3>
								<a href="{{url('/user/kategori/smartphone')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptop</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphone</a></li>
									<li><a data-toggle="tab" href="#tab1">Accesories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
                                        @foreach($produk as $p)
										<div class="product">
											<div class="product-img">
											<a href="{{url('/user/detail/'.$p->id)}}"><img src="{{$p->foto}}" alt="" width="250px" ></a>	
												
											</div>
											<div class="product-body">
												<p class="product-category">{{$p->kategori}}</p>
												<h3 class="product-name"><a href="{{url('/user/detail/'.$p->id)}}">{{$p->id}} | {{$p->nama_barang}}</a></h3>
                                                <h4 class="product-price">@currency($p->harga_jual)</h4>
											</div>
											
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{url('/user/beli/'.$p->id)}}">add to cart</a></button>
											</div>
											
										</div>
                                        @endforeach
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection
