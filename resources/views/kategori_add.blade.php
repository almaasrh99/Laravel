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
              <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
            </div>
            <div class="card-body">
            <form action="{{url('/admin/kategori/add/post/save')}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <!-- <h2>Masukan Data Kategori</h2> -->
                <div class="form-group">
                    <p> Id
                        <input type="text" name="id" class="form-control">
                    </p>
                </div>
                <div class="form-group">
                    <p> Category
                        <input type="text" name="nama_kategori" class="form-control">
                    </p>
                </div>
                <input type="submit" value="Add" class="btn btn-success col-12"/>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection
