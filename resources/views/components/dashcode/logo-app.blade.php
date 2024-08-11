@if(!empty($logo))
<img src="{{ asset('storage') . "/" . $logo }}" class="black_logo w-12" alt="logo">
<img src="{{ asset('storage') . "/" . $logo }}" class="white_logo w-12" alt="logo">
@else
<img src="{{ asset('dashcode/images/logo/favicon.svg') }}" class="black_logo w-12" alt="logo">
<img src="{{ asset('dashcode/images/logo/favicon.svg') }}" class="white_logo w-12" alt="logo">
@endif