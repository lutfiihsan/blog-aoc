@extends('layouts.dashcode')

@section('title', 'Pengguna')

@section('title_main')
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4
            class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
            {{ __('Pengguna') }}
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
                    {{ __('Detail') }}</li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="flex justify-start mb-4">
        <a href="{{ route('backend.users.index') }}"
            class="btn btn-sm btn-outline btn-secondary flex items-center dark:bg-slate-600 dark:text-slate-300">
            <iconify-icon icon="mdi:arrow-left" class="pr-2"></iconify-icon>
            Kembali
        </a>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="lg:col-span-4 col-span-12">
            <div class="card h-full">
                <header class="card-header">
                    <h4 class="card-title">{{ __('Foto Profil') }}</h4>
                </header>
                <div class="card-body p-6">
                    @if ($user->image)
                        <a href="{{ asset('storage') . '/' . $user->image }}" target="_blank">
                            <img src="{{ asset('storage') . '/' . $user->image }}" alt="logo" class="rounded-md mx-auto">
                        </a>
                    @else
                        <img src="{{ asset('dashcode') }}/images/users/user-1.jpg" alt="logo" class="rounded-md mx-auto">
                    @endif
                </div>
            </div>
        </div>
        <div class="lg:col-span-8 col-span-12">
            <div class="card">
                <header class="card-header">
                    <h4 class="card-title">{{ __('Informasi Pengguna') }}</h4>
                </header>
                <div class="card-body flex flex-col p-6">
                    <div class="card-text">
                        <div class="grid grid-cols-2 gap-5">
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('Nama Lengkap') }}
                                </label>
                                <div class="form-control">
                                    {{ $user->name ?? '-' }}
                                </div>
                            </div>
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('Dibuat Sejak') }}
                                </label>
                                <div class="form-control">
                                    {{ $user->created_at->diffForHumans() }}
                                </div>
                            </div>
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('Email') }}
                                </label>
                                <div class="form-control">
                                    {{ $user->email ?? '-' }}
                                </div>
                            </div>
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('Tempat, Tanggal Lahir') }}
                                </label>
                                <div class="form-control">
                                    {{ $user->birth_place != null && $user->birth_date != null ? $user->birth_place . ', ' . $user->birth_date : '-' }}
                                </div>
                            </div>
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('Role') }}
                                </label>
                                <div class="form-control h-[150px]">
                                    @foreach ($user->roles as $user_role)
                                        <span
                                            class="badge text-white bg-success-500 dark:text-success-500 dark:bg-opacity-30 capitalize">
                                            {{ $user_role->name }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="input-area relative">
                                <label for="largeInput" class="form-label">
                                    {{ __('Alamat') }}
                                </label>
                                <div class="form-control h-[150px]">
                                    {{ $user->address ?? '-' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
