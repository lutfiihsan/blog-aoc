@extends('Layout.BackEnd.app')
@section('title', 'Dashboard')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Selamat Datang, Start Bootstrap</h1>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <h1>26</h1>
                            Total Blogs
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <h1>26</h1>
                            Published
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body">
                            <h1>12</h1>
                            Draft
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <h1>6</h1>
                            Archived
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
