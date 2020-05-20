@extends('user_master')

@section('konten')

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <h3 class="title">Histori Transaksi</h3>
                <div class="row mb-4">
    

                <hr class="m-0">

                <div class="row mb-4">
                    <div class="col-md-12">
                        <table class="table" width="80%">
                            <thead>
                            <tr>
                                <th class="text-center">Nota Id</th>
                                <th class="text-center">Tgl Transaksi</th>
                                <th>Total Belanja</th>
                                <th class="text-right">Status</th>
                                <th class="text-right">Username</th>
                                <!-- <th class="text-right">Opsi</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transaksi as $t)
                                <tr id="item" class="item">
                                    <input type="hidden" name="user_id" id="user_id" value="{{$t->username}}">
                                    <td class="text-center" name="product_id" id="product_id">{{$t->id}}</td>
                                    <td name="name" id="name">{{$t->tgl_transaksi}}</td>
                                    <td id="price" name="price" class="text-right">{{$t->total_belanja}}</td>
                                    <td class="text-right" name="status" class="text-right">{{$t->status}}</td>
                                       
                                    <td class="text-right" id="subtotal">{{$t->username}}</td>
                                    
                                    </a>
                                    </td>
                                </tr>
                            @endforeach
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
                        </table>

                    </div>
                </div>
                <br>
                

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

@endsection
</body>
</html>
