@extends('Layout.landing')

@section('content')
    @include('Layout.FrontEnd.Components.menu')
    <section id="home" class="hero aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
        <div class="background">
            <div class="hero-content aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                data-aos-duration="2000">
                <h1>Lorem Ipsum Sil <span>Amet</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
                <a href="#" class="cta">Get Started</a>
            </div>
        </div>
    </section>
@endsection
