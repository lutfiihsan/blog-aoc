@extends('Layout.BackEnd.app')
@section('title', 'Blogs')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="my-3">
                <a href="#" class="btn btn-sm btn-warning">
                    <fa class="fa fa-fw fa-edit"></fa>
                    Edit
                </a>                
            </div>
            <h1 class="my-4">Title</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
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
