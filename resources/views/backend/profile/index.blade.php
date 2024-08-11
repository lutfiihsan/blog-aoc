@extends('layouts.dashcode')

@section('title', 'Profil')

@section('title_main')
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4
            class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
            {{ __('Profil') }}
        </h4>

        <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
            <ul class="m-0 p-0 list-none">
                <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                    <a href="{{ route('backend.dashboard.index') }}"
                        class="hover:text-primary-600 dark:hover:text-primary-400">
                        <iconify-icon icon="mdi:home"></iconify-icon>
                        <iconify-icon icon="mdi:chevron-right"
                            class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                    </a>
                </li>
                <li class="inline-block relative text-sm text-primary-500 font-Inter">
                    <a href="{{ route('backend.users.index') }}" class="hover:text-primary-600 dark:hover:text-primary-400">
                        {{ __('Pengguna') }}
                        <iconify-icon icon="mdi:chevron-right"
                            class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                    </a>
                </li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                    {{ __('Profil') }}</li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div
        class="profiel-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:flex lg:space-y-0 space-y-6 justify-between items-end relative z-[1]">
        <div class="bg-slate-300 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg">
        </div>
        <div class="profile-box flex-none md:text-start text-center">
            <div class="md:flex items-end md:space-x-6 rtl:space-x-reverse">
                <div class="flex-none">
                    <div
                        class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4 ring-slate-100 relative">
                        <img src='{{ $profile->image != null ? asset('storage') . '/' . $profile->image : asset('dashcode/images/users/user-1.jpg') }}'
                            class="w-full h-full object-cover rounded-full bg-slate-100 dark:bg-slate-600">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"
                            class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center justify-center md:top-[140px] top-[100px]">
                            <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                        {{ $profile->name }}
                    </div>
                    <div class="text-sm font-light text-slate-600 dark:text-slate-400">
                        {{ $profile->roles->first()->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="col-span-12">
            <div
                class="py-[18px] px-6 font-normal font-Inter text-sm rounded-md bg-success-500 bg-opacity-[14%] text-success-500">
                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                    <div class="flex-1 capitalize">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session()->has('danger'))
        <div class="col-span-12">
            <div
                class="py-[18px] px-6 font-normal font-Inter text-sm rounded-md bg-danger-500 bg-opacity-[14%] text-danger-500">
                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                    <div class="flex-1 capitalize">
                        {{ session('danger') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    @error('password')
        <div class="col-span-12">
            <div
                class="py-[18px] px-6 font-normal font-Inter text-sm rounded-md bg-danger-500 bg-opacity-[14%] text-danger-500">
                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                    <div class="flex-1 capitalize">
                        Password gagal diperbarui
                    </div>
                </div>
            </div>
        </div>
    @enderror

    <div class="grid grid-cols-12 gap-6">
        <div class="lg:col-span-5 col-span-12">
            <div class="card h-full">
                <header class="card-header">
                    <h4 class="card-title">{{ __('Informasi Pribadi') }}</h4>
                    <div class="card-action">
                        <a href="#"
                            class="text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-200">
                            <button data-bs-toggle="modal" data-bs-target="#edit_profile"
                                class="btn btn-sm btn-outline btn-light flex items-center dark:bg-slate-600 dark:text-slate-300">
                                <iconify-icon icon="mdi:pencil" class="pr-2"></iconify-icon>
                                {{ __('Edit') }}
                            </button>
                        </a>
                    </div>
                </header>
                <div class="card-body p-6">
                    <ul class="grid grid-cols-1 gap-6">
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="mdi:clock"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    {{ __('Dibuat Sejak') }}
                                </div>
                                <div class="text-base text-slate-600 dark:text-slate-50">
                                    {{ $profile->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </li>
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="mdi:gender-male-female"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    {{ __('Jenis Kelamin') }}
                                </div>
                                <div class="text-base text-slate-600 dark:text-slate-50">
                                    {{ $profile->gender != null ? ($profile->gender == 'male' ? 'Laki-laki' : 'Perempuan') : '-' }}
                                </div>
                            </div>
                        </li>
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="heroicons:calendar"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    {{ __('Tempat, Tanggal Lahir') }}
                                </div>
                                <div class="text-base text-slate-600 dark:text-slate-50">
                                    {{ $profile->birth_place != null && $profile->birth_date != null ? $profile->birth_place . ', ' . $profile->birth_date : '-' }}
                                </div>
                            </div>
                        </li>
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="heroicons:envelope"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    {{ __('Email') }}
                                </div>
                                <div class="text-base text-slate-600 dark:text-slate-50">
                                    {{ $profile->email ?? '-' }}
                                </div>
                            </div>
                        </li>
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="heroicons:phone-arrow-up-right"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    {{ __('Telp') }}
                                </div>
                                <a href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                    {{ $profile->phone_number ?? '-' }}
                                </a>
                            </div>
                        </li>
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="heroicons:map"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    {{ __('Alamat') }}
                                </div>
                                <div class="text-base text-slate-600 dark:text-slate-50">
                                    {{ $profile->address ?? '-' }}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="lg:col-span-7 col-span-12">
            <form action="{{ route('backend.profile.update.password', $profile->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title">{{ __('Ganti Kata Sandi') }}</h4>
                        <div class="card-action">
                            <button
                                class="btn btn-sm btn-outline btn-dark flex items-center dark:bg-slate-600 dark:text-slate-300">
                                {{ __('Simpan Kata Sandi') }}
                            </button>
                        </div>
                    </header>
                    <div class="card-body flex flex-col p-6 pb-10">
                        <div class="card-text">
                            <div class="space-y-4">
                                <div class="input-area">
                                    <label for="password" class="form-label">{{ __('Kata Sandi Baru') }}</label>
                                    <input required name="password" type="password"
                                        class="form-control @error('password') !border-danger-500 is-invalid @enderror"
                                        placeholder="Kata Sandi Baru">

                                    @error('password')
                                        <span
                                            class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-area">
                                    <label for="password_confirmation"
                                        class="form-label">{{ __('Konfirmasi Kata Sandi') }}</label>
                                    <input required name="password_confirmation" type="password"
                                        class="form-control @error('password_confirmation') !border-danger-500 @enderror"
                                        placeholder="Konfirmasi Kata Sandi">

                                    @error('password_confirmation')
                                        <small class="invalid-feedbcak" role="alert">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="edit_profile" tabindex="-1" aria-labelledby="edit_profile" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
          rounded-md outline-none text-current">
                <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                    <div
                        class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                        <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                            {{ __('Edit Profil') }}
                        </h3>
                        <button type="button"
                            class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                      dark:hover:bg-slate-600 dark:hover:text-white"
                            data-bs-dismiss="modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                                                      11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">
                                {{ __('Close') }}
                            </span>
                        </button>
                    </div>

                    <div class="card xl:col-span-2">
                        <div class="card-body flex flex-col p-6">
                            <div class="card-text h-full ">
                                <form class="space-y-4"
                                    action="{{ route('backend.profile.update.information', $profile->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="{{ $profile->id }}">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">
                                                {{ __('Nama Lengkap') }}
                                            </label>
                                            <input type="text"
                                                class="form-control @error('name') !border-danger-500 is-invalid @enderror"
                                                placeholder="Nama Lengkap" name="name"
                                                value="{{ old('name', $profile->name) }}">

                                            @error('name')
                                                <span
                                                    class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">
                                                {{ __('Email') }}
                                            </label>
                                            <input type="email"
                                                class="form-control @error('email') !border-danger-500 is-invalid @enderror"
                                                placeholder="Email" name="email"
                                                value="{{ old('email', $profile->email) }}">

                                            @error('email')
                                                <span
                                                    class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">Jenis Kelamin</label>
                                            <select name="gender"
                                                class="form-control @error('gender') !border-danger-500 is-invalid @enderror">
                                                <option value="male"
                                                    {{ $profile->gender == 'male' || old('gender') == 'male' ? 'selected' : '' }}
                                                    class="dark:bg-slate-700">
                                                    Laki - Laki
                                                </option>
                                                <option value="female"
                                                    {{ $profile->gender == 'female' || old('gender') == 'female' ? 'selected' : '' }}
                                                    class="dark:bg-slate-700">
                                                    Perempuan
                                                </option>
                                            </select>

                                            @error('gender')
                                                <span
                                                    class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">
                                                {{ __('Telp') }}
                                            </label>
                                            <input type="text"
                                                class="form-control @error('phone_number') !border-danger-500 is-invalid @enderror"
                                                placeholder="Telp" name="phone_number"
                                                value="{{ old('phone_number', $profile->phone_number) }}">

                                            @error('phone_number')
                                                <span
                                                    class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">
                                                {{ __('Tempat Lahir') }}
                                            </label>
                                            <input type="text"
                                                class="form-control @error('birth_place') !border-danger-500 is-invalid @enderror"
                                                placeholder="Tempat Lahir" name="birth_place"
                                                value="{{ old('birth_place', $profile->birth_place) }}">

                                            @error('birth_place')
                                                <span
                                                    class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">
                                                {{ __('Tanggal Lahir') }}
                                            </label>
                                            <input type="date"
                                                class="form-control @error('birth_date') !border-danger-500 is-invalid @enderror"
                                                placeholder="Tanggal Lahir" name="birth_date"
                                                value="{{ old('birth_date', $profile->birth_date) }}">

                                            @error('birth_date')
                                                <span
                                                    class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-area relative">
                                        <label for="largeInput" class="form-label">
                                            {{ __('Alamat') }}
                                        </label>
                                        <textarea class="form-control @error('address') !border-danger-500 is-invalid @enderror" placeholder="Alamat"
                                            name="address">{{ old('address', $profile->address) }}</textarea>

                                        @error('address')
                                            <span
                                                class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-sm btn-outline btn-dark flex items-center dark:bg-slate-600 dark:text-slate-300">
                                        Ubah Data
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('right-sidebar')
    <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white dark:bg-slate-800 invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 ltr:right-0 rtl:left-0 border-none w-96"
        tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
        <div class="offcanvas-header flex items-center justify-between p-4 border-b border-b-slate-300">
            <div>
                <h3 class="block text-xl font-Inter text-slate-900 font-medium dark:text-[#eee]">
                    Ganti Foto Profil
                </h3>
            </div>
            <button type="button"
                class="box-content text-2xl w-4 h-4 p-2 pt-0 -my-5 -mr-2 text-black dark:text-white border-none rounded-none opacity-100 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="offcanvas"><iconify-icon icon="line-md:close"></iconify-icon></button>
        </div>
        <div class="offcanvas-body flex-grow overflow-y-auto">
            <div class="settings-modal">
                <form action="{{ route('backend.profile.update.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6">
                        <h3 class="mt-4">Upload Gambar</h3>
                        <div class="mt-4">
                            <div class="flex flex-col items-center w-full gap-4">
                                <div>
                                    <label for="image"
                                        class="cursor-pointer flex items-center justify-center w-[150px] h-[150px] bg-slate-100 dark:bg-slate-600 rounded-full">
                                        <img src='{{ $profile->image != null ? asset('storage') . '/' . $profile->image : asset('dashcode/images/users/user-1.jpg') }}'
                                            class="w-[150px] h-[150px] object-cover rounded-full bg-slate-100 dark:bg-slate-600"
                                            id="profile-image-target">
                                    </label>
                                    <input id="image" type="file" class="hidden" name="image">
                                </div>
                                <script>
                                    document.getElementById('image').addEventListener('change', function(e) {
                                        var file = e.target.files[0];
                                        var reader = new FileReader();
                                        if (file.size > 2 * 1024 * 1024) {
                                            alert('Ukuran file maksimal 2MB');
                                            return;
                                        }
                                        if (file.type != 'image/jpeg' && file.type != 'image/jpg' && file.type != 'image/png') {
                                            alert('Format file: .jpg, .jpeg, .png');
                                            return;
                                        }
                                        reader.onload = function(e) {
                                            document.getElementById('profile-image-target').src = e.target.result;
                                        }
                                        reader.readAsDataURL(file);
                                    });
                                </script>
                                <div class="text-xs text-slate-500 dark:text-slate-300">
                                    <p>Ukuran file maksimal 2MB</p>
                                    <p>Format file: .jpg, .jpeg, .png</p>
                                </div>
                                <button type="submit"
                                    class="btn btn-dark w-full flex justify-center items-center">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
