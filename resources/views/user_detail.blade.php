@extends('user_master')

@section('konten')

@foreach($produk as $p)
<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
                                <img src="{{$p->foto}}">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs"></div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<div class="rating">
											<input type="radio" name="star" id="star1"><label for="star1"></label>
											<input type="radio" name="star" id="star2"><label for="star2"></label>
											<input type="radio" name="star" id="star3"><label for="star3"></label>
											<input type="radio" name="star" id="star4"><label for="star4"></label>
											<input type="radio" name="star" id="star5"><label for="star5"></label>
							</div>
							<h2 class="product-name">{{$p->nama_barang}}</h2>
                            <ul class="product-links">
								<li>Category: {{$p->kategori}}</li>
							</ul>
							<div class="product-links">
								<h3>@currency($p->harga_jual)</h3>
                                <p><b>Stock :</b> {{$p->stok}}</p>
                                <p><b>Warna :</b> {{$p->warna}}</p>
                                <p><b>Details :</b></p>
                                <!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>{{$p->spesifikasi}}</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->
							</div>
                           <div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{url('/user/beli/'.$p->id)}}">add to cart</a></button>
								</div>
					    </div>
                    </div>
					<!-- /Product details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        <!-- /SECTION -->
        @endforeach

@endsection
