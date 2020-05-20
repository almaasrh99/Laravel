@extends('gudang_master')

@section('konten')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Category</h1>
        <p class="mb-4">a class or division of people or things regarded as having particular shared
            characteristics.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Category</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr style="text-align:center">
                            <th scope="col">Id</th>
                            <th scope="col">Categories Name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($kategori as $k)
                            <tr style="text-align:center">
                                <td>{{$k->id}}</td>
                                <td>{{$k->nama_kategori}}</td>
                                <td>
                                    <a href="{{url('/admin/kategori/edit/'.$k->id)}}"
                                       class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fas fa-edit"></i>
                            </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="{{url('/admin/kategori/delete/'.$k->id)}}"
                                       class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                            </span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
