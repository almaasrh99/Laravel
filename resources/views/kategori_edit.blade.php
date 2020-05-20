@extends('gudang_master')

@section('konten')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Category</h1>
          <p class="mb-4">a class or division of people or things regarded as having particular shared characteristics.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
            </div>
            <div class="card-body">
            <form action="/admin/kategori/{{$nama_kategori->id}}/update" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <p> Product Name
                    <input hidden="text" name="id" class="form-control" value="{{$nama_kategori->id}}">
                    <input type="text" name="nama_kategori" class="form-control" value="{{$nama_kategori->nama_kategori}}">
                    </p>
                </div>
                <input type="submit" value="Edit" class="btn btn-success col-12"/>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection
