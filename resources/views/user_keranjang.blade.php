@extends('user_master')

@section('konten')

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <h3 class="title">Shopping Cart</h3>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <table style="width:50%;">
                            <tr>
                                <th>Tanggal</th>
                                <td>:{{ date('Y-m-d H:i:s') }}</td>
                            <tr>
                            <tr>
                                <th>Customer</th>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <hr class="m-0">

                <div class="row mb-4">
                    <div class="col-md-12">
                        <table class="table" width="80%">
                            <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Foto</th>
                                <th>Nama Produk</th>
                                <th class="text-right">Price</th>
                                <th class="text-right">Quantity</th>
                                <th class="text-right">Sub Total</th>
                                <!-- <th class="text-right">Opsi</th> -->
                            </tr>
                            </thead>
                            @foreach($keranjang as $k)
                            <tbody>
                                <tr id="item" class="item">
                                    <input type="hidden" name="user_id" id="user_id" value="{{$k->user_id}}">
                                    <td class="text-center" name="product_id" id="product_id">{{$k->produk_id}}</td>
                                    <td class="text-center"><img src="{{$k->foto}}" alt="" width="100px"></td>
                                    <td name="name" id="name">{{$k->nama_barang}}</td>
                                    <td id="price" name="price" class="text-right">{{$k->harga_jual}}</td>
                                    <td class="text-right">
                                        <button type="button" class="min btn btn-warning btn-sm float-left">-</button>
                                        <span id="qty" name="qty">{{$k->jumlah}}</span>
                                        <button type="button" class="plus btn btn-success btn-sm float-right">+</button>
                                    </td>
                                    <td class="text-right" id="subtotal">{{$k->subtotal}}</td>
                                    <td class="text-right"><a href="{{url('/user/keranjang/delete/'.$k->produk_id)}}">
                                            <button type="button" class="btn btn-danger btn-sm float-right">X</button>
                                    </a>
                                    </td>
                                </tr>

                            <!-- <tr>
                                        <td colspan="4" class="text-right pr-2" style="background: #efefef;">Sub Total</td>
                                        <td class="text-right" style="background: #efefef;">Rp. 0.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right pr-2">PPN 10%</td>
                                        <td class="text-right">Rp. 0.00</td>
                                    <tr>
                                    <tr>
                                        <td colspan="4" class="text-right pr-2"><b>Total Tagihan</b></td>
                                        <td class="text-right" ><b>Rp. 0.00</b></td>
                                    <tr> -->
                            </tbody>
                            @endforeach
                        </table>

                    </div>
                </div>
                <br>
                <div class="row mt-5">
                    <div class="col-md-12">
                        @csrf
                        <button type="submit" id="checkout" class="btn btn-warning" width="100%">Checkout</button>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

@endsection
</body>
</html>
