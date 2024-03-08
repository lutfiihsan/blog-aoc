@extends('Layout.BackEnd.app')
@section('title', 'Blogs')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">List Blogs</h1>
            <div class="my-3">
                <a href="{{ url('admin/blogs/create') }}" class="btn btn-sm btn-primary">
                    <fa class="fa fa-fw fa-plus"></fa> Tambah Blog
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
                                                <th>Judul</th>
                                                <th>Penulis</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Tanggal Dibuat</th>
                                                <th></th>
                                            </tr>
                                            @foreach ($blogs as $blog)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $blog->title }}</td>
                                                    <td>{{ Str::ucfirst($blog->fullname) }}</td>
                                                    <td>{{ Str::ucfirst($blog->category_name) }}</td>
                                                    <td>{!! status_blog($blog->status) !!}</td>
                                                    <td>{{ date_indo($blog->created_at) }}</td>
                                                    <td>
                                                        <a href="{{ url('admin/blogs', $blog->slug) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <fa class="fa fa-fw fa-eye"></fa>
                                                        </a>
                                                        <a href="{{ url('admin/blogs/' . $blog->slug . '/edit') }}"
                                                            class="btn btn-sm btn-warning">
                                                            <fa class="fa fa-fw fa-edit"></fa>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>

                                        {{ $blogs->links() }}

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
