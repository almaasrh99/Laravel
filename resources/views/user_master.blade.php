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
                        <form action="/user/cari/produk" method="GET">
                            <select name="kategori" id="kategori" class="input-select">
                                <option type="input" value="all">All</option>
                                <option type="input" value="laptop">Laptop</option>
                                <option type="input" value="smartphone">Smartphone</option>
                                <option type="input" value="accessories">Accessories</option>
                            </select>
                            <input class="input" name="cari" id="cari" placeholder="Search here">
                            <button class="search-btn" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Cart -->
                        <div>
                            <a href="{{url('/user/keranjang')}}">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                            </a>
                        </div>
                        <!-- /Cart -->

                        <div>
                            <a href="{{url('/user/transaksi')}}">
                                <i class="fa fa-list"></i>
                                <span>Transaksi</span>
                            </a>
                        </div>
                        <!-- /Cart -->

                        <!-- account -->
                        <div>
                            <a href="{{url('/index')}}">
                                <i class="fa fa-user-o"></i>
                                <span>{{$session['username']}} | SignOut</span>
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

@yield('konten')

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
        let qty_item = Number(qty.text()) + 1;
        qty.text(qty_item);
        let price = Number($(button).parent().parent().find("#price").text());
        $(button).parent().parent().find("#subtotal").text((price * qty_item));
        console.log($(button).parent().find("#qty").text())

    });
    $(".min").on("click", function () {
        let button = $(this);
        let qty = $(button).parent().find("#qty");
        let qty_item = Number(qty.text()) - 1;
        qty.text(qty_item);
        let price = Number($(button).parent().parent().find("#price").text());
        $(button).parent().parent().find("#subtotal").text((price * qty_item));
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
