@extends('Layout.BackEnd.app')
@section('title', 'Blogs')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="my-3">
                @include('Layout.BackEnd.Components.blog-button-back')            
            </div>
            <h1 class="my-4">{{ $blog->title }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th class="w-25">Judul</th>
                                                <td>{{ $blog->title }}</td>
                                            </tr>
                                            <tr>
                                                <th>Penulis</th>
                                                <td>{{ Str::ucfirst($blog->fullname) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tgl Dibuat</th>
                                                <td>{{ date_indo($blog->created_at) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{!! status_blog($blog->status) !!}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">{!! $blog->content !!}</td>
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
