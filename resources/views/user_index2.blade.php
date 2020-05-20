<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Goodget</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('assets/library/star.css')}}"/>
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/bootstrap.min.css')}}"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/slick.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/slick-theme.css')}}"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/nouislider.min.css')}}"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{url('assets/library/template/css/font-awesome.min.css')}}"/>

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/style.css')}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- HEADER -->
<header>

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{url('/user')}}" class="logo">
                            <img src="{{url('assets/library/template/images/logo2.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form action="{{url('/user/cari/produk')}}" method="GET">
                            <select class="input-select">
                                <option value="0"></option>
                                <option value="Laptop"><a href="{{url('/user/kategori/laptop')}}">Laptop</a></option>
                                <option value="2"><a href="{{url('/user/kategori/smartphone')}}">Smartphone</a></option>
                                <option value="3"><a href="{{url('/user/kategori/aksesoris')}}">Accessories</a></option>
                            </select>
                            <input class="input" name="cari" placeholder="Search here">
                            <button class="search-btn"><a href="{{url('/user/cari/produk')}}">Search</a></button>
                            </a>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Cart -->
                        <div>
                            <a href="{{url('/login">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                            </a>
                        </div>
                        <!-- /Cart -->

                        <!-- account -->
                        <div>
                            <a href="{{url('/login')}}">
                                <i class="fa fa-user-o"></i>
                                <span>SignIn</span>
                            </a>
                        </div>
                        <!-- /account -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->


<!-- konten -->

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
								<a href="{{url('/login')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
								<a href="{{url('/login')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
								<a href="{{url('/login')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
									<li class="active"><a data-toggle="tab" href="{{url('/login')}}">Laptop</a></li>
									<li><a data-toggle="tab" href="{{url('/login')}}">Smartphone</a></li>
									<li><a data-toggle="tab" href="{{url('/login')}}">Accesories</a></li>
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
											<a href="{{url('/login')}}"><img src="{{$p->foto}}" alt="" width="250px" ></a>

											</div>
											<div class="product-body">
												<p class="product-category">{{$p->kategori}}</p>
												<h3 class="product-name"><a href="{{url('/login')}}">{{$p->id}} | {{$p->nama_barang}}</a></h3>
                                                <h4 class="product-price">Rp. {{$p->harga_jual}}</h4>
											</div>

											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{url('/login')}}">add to cart</a></button>
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

<!-- end konten -->
<!-- FOOTER -->
<footer id="footer">

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Us</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{url('assets/library/jquery/jquery-3.4.1.js')}}"></script>
<script src="{{url('assets/library/template/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/library/template/js/slick.min.js')}}"></script>
<script src="{{url('assets/library/template/js/nouislider.min.js')}}"></script>
<script src="{{url('assets/library/jquery/jquery.zoom.min.js')}}"></script>
<script src="{{url('assets/library/template/js/main.js')}}"></script>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    $(".plus").on("click", function () {
        let button = $(this);
        let qty = $(button).parent().find("#qty");
        qty.text((Number(qty.text()) + 1));
        console.log($(button).parent().find("#qty").text())

    });
    $(".min").on("click", function () {

        let button = $(this);
        let qty = $(button).parent().find("#qty");
        qty.text((Number(qty.text()) - 1));
        console.log($(button).parent().find("#qty").text())

    });

    $("#checkout").on("click", function () {
        console.log("checkout clicked");
        let bodyRequest = {
            items: []
        };

        $(".item").each(function (index, e) {
            let item = {
                "product_id": $(this).find("#product_id").text(),
                "name": $(this).find("#name").text(),
                "price": $(this).find("#price").text(),
                "qty": $(this).find("#qty").text(),
                "user_id": $(this).find("#user_id").val(),
            }
            bodyRequest.items.push(item);
        })

        $.ajax({
            type: 'POST',
            url: '/user/nota',
            data: {
                '_token': $('input[name=_token]').val(),
                'items': bodyRequest
            },
            success: function (data) {
                console.log("#data",data);
                if(data.redirect) {
                    window.location.href = data.redirect;
                }
            }
        });
    });
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Goodget</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('assets/library/star.css')}}"/>
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/bootstrap.min.css')}}"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/slick.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/slick-theme.css')}}"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/nouislider.min.css')}}"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{url('assets/library/template/css/font-awesome.min.css')}}"/>

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{url('assets/library/template/css/style.css')}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- HEADER -->
<header>

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{url('/user')}}" class="logo">
                            <img src="{{url('assets/library/template/images/logo2.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form action="{{url('/user/cari/produk')}}" method="GET">
                            <select class="input-select">
                                <option value="0"></option>
                                <option value="Laptop"><a href="{{url('/user/kategori/laptop')}}">Laptop</a></option>
                                <option value="2"><a href="{{url('/user/kategori/smartphone')}}">Smartphone</a></option>
                                <option value="3"><a href="{{url('/user/kategori/aksesoris')}}">Accessories</a></option>
                            </select>
                            <input class="input" name="cari" placeholder="Search here">
                            <button class="search-btn"><a href="{{url('/user/cari/produk')}}">Search</a></button>
                            </a>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Cart -->
                        <div>
                            <a href="{{url('/login">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                            </a>
                        </div>
                        <!-- /Cart -->

                        <!-- account -->
                        <div>
                            <a href="{{url('/login')}}">
                                <i class="fa fa-user-o"></i>
                                <span>SignIn</span>
                            </a>
                        </div>
                        <!-- /account -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->


<!-- konten -->

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
                                <a href="{{url('/login')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
                                <a href="{{url('/login')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
                                <a href="{{url('/login')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
                                    <li class="active"><a data-toggle="tab" href="{{url('/login')}}">Laptop</a></li>
                                    <li><a data-toggle="tab" href="{{url('/login')}}">Smartphone</a></li>
                                    <li><a data-toggle="tab" href="{{url('/login')}}">Accesories</a></li>
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
                                            <a href="{{url('/login')}}"><img src="{{$p->foto}}" alt="" width="250px" ></a>

                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{$p->kategori}}</p>
                                                <h3 class="product-name"><a href="{{url('/login')}}">{{$p->id}} | {{$p->nama_barang}}</a></h3>
                                                <h4 class="product-price">Rp. {{$p->harga_jual}}</h4>
                                            </div>

                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{url('/login')}}">add to cart</a></button>
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

<!-- end konten -->
<!-- FOOTER -->
<footer id="footer">

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                            <span class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Us</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{url('assets/library/jquery/jquery-3.4.1.js')}}"></script>
<script src="{{url('assets/library/template/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/library/template/js/slick.min.js')}}"></script>
<script src="{{url('assets/library/template/js/nouislider.min.js')}}"></script>
<script src="{{url('assets/library/jquery/jquery.zoom.min.js')}}"></script>
<script src="{{url('assets/library/template/js/main.js')}}"></script>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    $(".plus").on("click", function () {
        let button = $(this);
        let qty = $(button).parent().find("#qty");
        qty.text((Number(qty.text()) + 1));
        console.log($(button).parent().find("#qty").text())

    });
    $(".min").on("click", function () {

        let button = $(this);
        let qty = $(button).parent().find("#qty");
        qty.text((Number(qty.text()) - 1));
        console.log($(button).parent().find("#qty").text())

    });

    $("#checkout").on("click", function () {
        console.log("checkout clicked");
        let bodyRequest = {
            items: []
        };

        $(".item").each(function (index, e) {
            let item = {
                "product_id": $(this).find("#product_id").text(),
                "name": $(this).find("#name").text(),
                "price": $(this).find("#price").text(),
                "qty": $(this).find("#qty").text(),
                "user_id": $(this).find("#user_id").val(),
            }
            bodyRequest.items.push(item);
        })

        $.ajax({
            type: 'POST',
            url: '/user/nota',
            data: {
                '_token': $('input[name=_token]').val(),
                'items': bodyRequest
            },
            success: function (data) {
                console.log("#data",data);
                if(data.redirect) {
                    window.location.href = data.redirect;
                }
            }
        });
    });
</script>
</body>
</html>
