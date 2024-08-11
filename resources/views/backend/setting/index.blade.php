@extends('layouts.dashcode')

@section('title', 'Pengaturan')

@section('title_main')
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4
            class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
            {{ __('Pengaturan') }}
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
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                    {{ __('Pengaturan') }}</li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
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

    <div class="grid grid-cols-12 gap-6">
        <div class="lg:col-span-4 col-span-12">
            <div class="card h-full">
                <header class="card-header">
                    <h4 class="card-title">{{ __('Logo Aplikasi') }}</h4>
                    @can('ubah_pengaturan_web')
                        <div class="card-action">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"
                                class="text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-200">
                                <button
                                    class="btn btn-sm btn-outline btn-light flex items-center dark:bg-slate-600 dark:text-slate-300">
                                    <iconify-icon icon="mdi:camera" class="text-lg"></iconify-icon>
                                    <span class="ml-2">{{ __('Upload Logo') }}</span>
                                </button>
                            </a>
                        </div>
                    @endcan
                </header>
                <div class="card-body p-6">
                    @if(!empty($logo))
                    <a href="{{ asset('storage') . '/' . $setting->logo }}" target="_blank">
                        <img src="{{ asset('storage') . '/' . $setting->logo }}" alt="logo"
                            class="w-full sm:h-[100px] md:h-[100px] lg:h-[100px] xl:h-[100px] 2xl:h-[100px] rounded-md">
                    </a>
                    @else
                    <a href="{{ asset('dashcode/images/logo/favicon.svg') }}" target="_blank">
                        <img src="{{ asset('dashcode/images/logo/favicon.svg') }}" alt="logo"
                            class="w-full sm:h-[100px] md:h-[100px] lg:h-[100px] xl:h-[100px] 2xl:h-[100px] rounded-md">
                    </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="lg:col-span-8 col-span-12">
            <div class="card">
                <header class="card-header">
                    <h4 class="card-title">{{ __('Informasi Detail Aplikasi') }}</h4>
                    <div class="card-action">
                        <a href="#"
                            class="text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-200">
                            <button data-bs-toggle="modal" data-bs-target="#edit_profile_app"
                                class="btn btn-sm btn-outline btn-light flex items-center dark:bg-slate-600 dark:text-slate-300">
                                <iconify-icon icon="mdi:pencil" class="pr-2"></iconify-icon>
                                {{ __('Edit Informasi') }}
                            </button>
                        </a>
                    </div>
                </header>
                <div class="card-body flex flex-col p-6">
                    <div class="card-text">
                        <div class="grid grid-cols-1 gap-5">
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('Nama Aplikasi') }}
                                </label>
                                <div class="form-control">
                                    {{ $setting->name ?? '-' }}
                                </div>
                            </div>
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('Email') }}
                                </label>
                                <div class="form-control">
                                    {{ $setting->email ?? '-' }}
                                </div>
                            </div>
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('No. Telp / WhatsApp') }}
                                </label>
                                <div class="form-control">
                                    {{ $setting->phone_number ?? '-' }}
                                </div>
                            </div>
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('Alamat') }}
                                </label>
                                <div class="form-control h-[100px]">
                                    {{ $setting->address ?? '-' }}
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                                <div class="input-area relative">
                                    <label for="largeInput" class="form-label">
                                        {{ __('Facebook') }}
                                    </label>
                                    <div class="form-control">
                                        {{ $setting->facebook ?? '-' }}
                                    </div>
                                </div>
                                <div class="input-area relative">
                                    <label for="largeInput" class="form-label">
                                        {{ __('Youtube') }}
                                    </label>
                                    <div class="form-control">
                                        {{ $setting->youtube ?? '-' }}
                                    </div>
                                </div>
                                <div class="input-area relative">
                                    <label for="largeInput" class="form-label">
                                        {{ __('Instagram') }}
                                    </label>
                                    <div class="form-control">
                                        {{ $setting->instagram ?? '-' }}
                                    </div>
                                </div>
                                <div class="input-area relative">
                                    <label for="largeInput" class="form-label">
                                        {{ __('Twitter') }}
                                    </label>
                                    <div class="form-control">
                                        {{ $setting->twitter ?? '-' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @can('ubah_pengaturan_web')
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="edit_profile_app" tabindex="-1" aria-labelledby="edit_profile_app" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
          rounded-md outline-none text-current">
                <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                    <div
                        class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                        <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                            {{ __('Edit Informasi') }}
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
                            <div class="card-text h-full">
                                <form action="{{ route('backend.setting.update.information', $setting) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="grid grid-cols-1 gap-5">
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">
                                                {{ __('Nama Aplikasi') }}
                                            </label>
                                            <input name="name" type="text"
                                                class="form-control @error('name') !border-danger-500 is-invalid @enderror"
                                                placeholder="Nama Aplikasi" value="{{ $setting->name ?? old('name') }}">
                                            @error('name')
                                                <small class="invalid-feedback" role="alert">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">
                                                {{ __('Email') }}
                                            </label>
                                            <input name="email" type="email"
                                                class="form-control @error('email') !border-danger-500 is-invalid @enderror"
                                                placeholder="Email" value="{{ $setting->email ?? old('email') }}">
                                            @error('email')
                                                <small class="invalid-feedback" role="alert">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">
                                                {{ __('No. Telp / WhatsApp') }}
                                            </label>
                                            <input name="phone_number" type="text"
                                                class="form-control @error('phone_number') !border-danger-500 is-invalid @enderror"
                                                placeholder="No. Telp / WhatsApp"
                                                value="{{ $setting->phone_number ?? old('phone_number') }}">
                                            @error('phone_number')
                                                <small class="invalid-feedback" role="alert">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-area relative">
                                            <label for="largeInput" class="form-label">
                                                {{ __('Alamat') }}
                                            </label>
                                            <textarea class="form-control @error('address') !border-danger-500 is-invalid @enderror" placeholder="Alamat"
                                                name="address">{{ old('address', $setting->address) }}</textarea>
                                            @error('address')
                                                <small class="invalid-feedback" role="alert">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                                            <div class="input-area relative">
                                                <label for="largeInput" class="form-label">
                                                    {{ __('Facebook') }}
                                                </label>
                                                <input name="facebook" type="text"
                                                    class="form-control @error('facebook') !border-danger-500 is-invalid @enderror"
                                                    placeholder="Facebook"
                                                    value="{{ $setting->facebook ?? old('facebook') }}">
                                                @error('facebook')
                                                    <small class="invalid-feedback"
                                                        role="alert">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-area relative">
                                                <label for="largeInput" class="form-label">
                                                    {{ __('Youtube') }}
                                                </label>
                                                <input name="youtube" type="text"
                                                    class="form-control @error('youtube') !border-danger-500 is-invalid @enderror"
                                                    placeholder="Youtube"
                                                    value="{{ $setting->youtube ?? old('youtube') }}">
                                                @error('youtube')
                                                    <small class="invalid-feedback"
                                                        role="alert">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-area relative">
                                                <label for="largeInput" class="form-label">
                                                    {{ __('Instagram') }}
                                                </label>
                                                <input name="instagram" type="text"
                                                    class="form-control @error('instagram') !border-danger-500 is-invalid @enderror"
                                                    placeholder="Instagram"
                                                    value="{{ $setting->instagram ?? old('instagram') }}">
                                                @error('instagram')
                                                    <small class="invalid-feedback"
                                                        role="alert">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-area relative">
                                                <label for="largeInput" class="form-label">
                                                    {{ __('Twitter') }}
                                                </label>
                                                <input name="twitter" type="text"
                                                    class="form-control @error('twitter') !border-danger-500 is-invalid @enderror"
                                                    placeholder="Twitter"
                                                    value="{{ $setting->twitter ?? old('twitter') }}">
                                                @error('twitter')
                                                    <small class="invalid-feedback"
                                                        role="alert">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-sm btn-outline btn-dark flex items-center dark:bg-slate-600 dark:text-slate-300">
                                                Ubah Data
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection

@section('right-sidebar')
    @can('ubah_pengaturan_web')
        <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white dark:bg-slate-800 invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 ltr:right-0 rtl:left-0 border-none w-96"
            tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
            <div class="offcanvas-header flex items-center justify-between p-4 border-b border-b-slate-300">
                <div>
                    <h3 class="block text-xl font-Inter text-slate-900 font-medium dark:text-[#eee]">
                        Ganti Logo Aplikasi
                    </h3>
                </div>
                <button type="button"
                    class="box-content text-2xl w-4 h-4 p-2 pt-0 -my-5 -mr-2 text-black dark:text-white border-none rounded-none opacity-100 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="offcanvas"><iconify-icon icon="line-md:close"></iconify-icon></button>
            </div>
            <div class="offcanvas-body flex-grow overflow-y-auto">
                <div class="settings-modal">
                    <form action="{{ route('backend.setting.update.logo', $setting) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="p-6">
                            <h3 class="mt-4">Upload Gambar</h3>
                            <div class="mt-4">
                                <div class="flex flex-col items-center w-full gap-4">
                                    <div>
                                        <label for="image"
                                            class="cursor-pointer flex items-center justify-center w-full h-full bg-slate-100 dark:bg-slate-600 rounded-full">
                                            <img src='{{ $setting->logo != null ? asset('storage') . '/' . $setting->logo : asset('dashcode/images/users/user-1.jpg') }}'
                                                class="w-full h-full object-cover bg-slate-100 dark:bg-slate-600"
                                                id="profile-image-target">
                                        </label>
                                        <input id="image" type="file" class="hidden" name="logo">
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
    @endcan
@endsection
