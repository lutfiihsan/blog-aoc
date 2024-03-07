@extends('Layout.BackEnd.app')
@section('title', 'Blogs')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">List Categories</h1>
            <div class="my-3">
                <a href="{{ url('admin/categories/create') }}" class="btn btn-sm btn-primary">
                    <fa class="fa fa-fw fa-plus"></fa> Tambah Kategori
                </a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">

                                        <table class="table table-bordered">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Slug</th>
                                                <th></th>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
