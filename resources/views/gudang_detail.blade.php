@extends('gudang_master')

@section('konten')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Detail</h1>
          <div class="row">
            <div class="col-lg-6">

              <!-- Brand Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Picture</h6>
                </div>
                <div class="card-body">
                    <img src="{{$produk->foto}}" height="400" width="480">
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Deskripsi</h6>
                </div>
                <div class="card-body">
                    <p>ID : {{$produk->id}}</p>
                    <p>kategori : {{$produk->nama_kategori}}</p>
                    <p>Nama Produk : {{$produk->nama_barang}}</p>
                    <p>Stok : {{$produk->stok}}</p>
                    <p>Warna : {{$produk->warna}}</p>
                    <p>Harga Beli : {{$produk->harga_beli}}</p>
                    <p>Harga Jual : {{$produk->harga_jual}}</p>
                    <p>Tanggal Masuk : {{$produk->tgl_masuk}}</p>
                    <p>Deskripsi : {{$produk->spesifikasi}}<p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

@endsection
