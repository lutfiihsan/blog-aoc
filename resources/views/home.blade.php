@extends('Layout.FrontEnd.app')

@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom my-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-12">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    @for ($i = 0; $i < 7; $i++)
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top"
                                        src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 1, 2023</div>
                                    <h2 class="card-title h4">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-primary" href="{{ url('blog') }}">Read more →</a>
                                </div>
                            </div>
                            <!-- Close Blog post-->
                        </div>
                    @endfor
                    <!-- Button All Blog -->
                </div>
            </div>
        </div>
    </div>
@endsection
