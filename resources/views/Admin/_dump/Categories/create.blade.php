@extends('Layout.BackEnd.app')
@section('title', 'Blogs')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="my-3">
                <a href="{{ url('admin/categories') }}" class="btn btn-sm btn-secondary">
                    <fa class="fa fa-fw fa-arrow-left"></fa> Kembali
                </a>  
            </div>
            <h1 class="my-4">Create Category</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('admin/categories') }}" method="post">
                        @csrf
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="my-3">
                                            <button type="submit" class="btn btn-sm btn-primary">
                                                <fa class="fa fa-fw fa-save"></fa> Simpan
                                            </button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th class="w-25">Kategori</th>
                                                    <td>
                                                        <input type="text" name="title" class="form-control"
                                                            required="true" placeholder="Kategori" autocomplete="off" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
