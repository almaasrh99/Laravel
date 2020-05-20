@extends('gudang_master')

@section('konten')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Product</h1>
            <p class="mb-4">an object or system made available for consumer use, it is anything that can be offered to a
                market to satisfy the desire or need of a customer.</p>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Table Product</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Products Name</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Purchase Price</th>
                                <th scope="col">Selling Price</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($produk as $g)
                                <tr>
                                    <td>{{$g->id}}</td>
                                    <td>{{$g->nama_barang}}</td>
                                    <td>{{$g->stok}}</td>
                                    <td>Rp. {{$g->harga}},00</td>
                                    <td>Rp. {{$g->harga_jual}},00</td>
                                    <td>
                                        <a href="{{url('/admin/detail/'.$g->id)}}" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fas fa-info"></i>
                            </span>
                                            <span class="text">Detail</span>
                                        </a>
                                        <a href="{{url('/admin/edit/'.$g->id)}}" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fas fa-edit"></i>
                            </span>
                                            <span class="text">Edit</span>
                                        </a>
                                        <a href="{{url('/admin/delete/produk/'.$g->id)}}"
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

@endsection
