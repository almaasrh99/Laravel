@extends('gudang_master')

@section('konten')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Product</h1>
          <p class="mb-4">an object or system made available for consumer use, it is anything that can be offered to a market to satisfy the desire or need of a customer.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
            </div>
            <div class="card-body">
            <form action="/admin/{{$produk->id}}/update" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <!-- <h2>Edit Data Produk</h2> -->
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="{{$produk->id}}" >
                </div>
                <div class="form-group">
                    <p> Foto <br>
                        <input type="file" name="file" value="{{$produk->foto}}">
                    </p>
                <div>
                <!-- <div class="form-group">
                    <p> Kategori
                        <input type="text" name="kategori_id" class="form-control" value="{{$produk->kategori_id}}">
                    </p>
                </div> -->
                <div class="form-group">
                    <p>Kategori<br>
                        <select  class="form-control" name="kategori_id" class="form-control">
                            <option value="1"> Laptop </option>
                            <option value="2"> Smartphone </option>
                            <option value="3"> Accessories </option>
                        </select>
                    </p>
                </div>
                <div class="form-group">
                    <p> Nama Produk
                        <input type="text" name="nama_barang" class="form-control" value="{{$produk->nama_barang}}">
                    </p>
                </div>
                <div class="form-group">
                    <p> Stok
                        <input type="number" name="stok" class="form-control" value="{{$produk->stok}}">
                    </p>
                </div>
                <div class="form-group">
                    <p> Warna
                        <input type="text" name="warna" class="form-control" value="{{$produk->warna}}">
                    </p>
                </div>
                <div class="form-group">
                    <p> Harga Beli
                        <input type="number" name="harga" class="form-control" value="{{$produk->harga}}">
                    </p>
                </div>
                <div class="form-group">
                    <p> Harga Jual
                        <input type="number" name="harga_jual" class="form-control" value="{{$produk->harga_jual}}">
                    </p>
                </div>
                <div class="form-group">
                    <p> Tanggal Masuk
                        <input type="date" name="tgl_masuk" class="form-control" value="{{$produk->tgl_masuk}}">
                    </p>
                </div>
                <div class="form-group">
                    <p> Deskripsi
                        <textarea name="spesifikasi" class="form-control" value="">{{$produk->spesifikasi}}</textarea>
                    </p>
                </div>
                <input type="submit" value="Edit" class="btn btn-success col-sm-12"/>
                </div>
                </div>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection

