{{-- <link rel="icon" href="#"> --}}
@if(!empty($logo))
<link rel="icon" href="{{ asset('storage') . "/" . $logo }}">
@else
<link rel="icon" href="{{ asset('dashcode/images/logo/favicon.svg') }}">
@endif