@extends('user_master')

@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- SECTION -->
<section class=bg-color-0>
    <div class="container">
        <div class="row align-items-center half-screen space">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Nota Pembayaran</h4>
                        <p>Nama : {{$session['username']}}</p>
                        <p>Tanggal : {{$tgl_transaksi}}</p>
                    </div>
                    <div class="col-md-6 text-right">
                        {{--                        <img src="{{url('assets/image/logo.png')}}" width="100">--}}
                    </div>
                </div>
                <br>

                <table class='table table-bordered'>
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    @foreach($transaksi as $tr)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$tr["nama_barang"]}}</td>
                            <td>{{$tr["harga"]}}</td>
                            <td>{{$tr["jumlah"]}}</td>
                            <td>{{$tr["subtotal"]}}</td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="4">Total :</td>
                        <td>{{$total_belanja}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">PPN (10%) :</td>
                        <td>{{$pajak}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">Total Dibayar :</td>
                        <td>{{$total_bayar}}</td>
                    </tr>
                    </tbody>
                </table>
                <center>
                    <a  style="width: 150px; height: 50px; font-size:medium; padding: 10px" class="btn btn-warning mt-4" href="{{url('/download/nota/'.$id)}}" target="_blank">Cetak Laporan</a>
                </center>
            </div>
        </div>
    </div>
    </div>
	@endsection
</section>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
