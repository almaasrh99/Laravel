@extends('user_master')

@section('konten')
<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">

							<div class="input-checkbox">
									<label for="category-1">
										<li><a href="{{url('/user/kategori/laptop')}}">
										Laptop</a></li>
									</label>
								</div>
                                <div class="input-checkbox">
									<label for="category-1">
										<li><a href="{{url('/user/kategori/smartphone')}}" >
										Smartphone</a></li>
									</label>
								</div>
                                <div class="input-checkbox">
									<label for="category-1">
									<li><a href="{{url('/user/kategori/aksesoris')}}" >
										Accesories</a></li>
									</label>
								</div>

							</div>
						</div>
						<!-- /aside Widget -->

					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">

						<!-- store products -->
						<div class="row">
                            @foreach($produk as $p)
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
									<a href="{{url('/user/detail/'.$p->id)}}"><img src="{{$p->foto}}" alt="" width="250px" ></a>
									</div>
									<div class="product-body">
										<p class="product-category">{{$p->nama_kategori}}</p>
										<h3 class="product-name"><a href="{{url('/user/detail/'.$p->id)}}}">{{$p->id}} | {{$p->nama_barang}}</a></h3>
										<h4 class="product-price">@currency($p->harga_jual)</h4>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{url('/user/beli/'.$p->id)}}">add to cart</a></button>
									</div>
								</div>
							</div>
                            @endforeach
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>
						</div>
						<!-- /store products -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        <!-- /SECTION -->

@endsection
