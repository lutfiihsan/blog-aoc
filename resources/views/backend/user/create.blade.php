@extends('layouts.dashcode')

@section('title', 'Tambah Pengguna')

@section('title_main')
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4
            class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
            {{ __('Tambah Pengguna') }}
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
                    {{ __('Tambah Pengguna') }}</li>
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
        <div class="lg:col-span-5 col-span-12">
            <div class="card h-full">
                <form action="{{ route('backend.users.store') }}" method="POST">
                    @csrf
                    <header class="card-header">
                        <h4 class="card-title">{{ __('Form') }}</h4>
                        <div class="card-action">
                            <a href="#"
                                class="text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-200">
                                <button
                                    class="btn btn-sm btn-outline btn-light flex items-center dark:bg-slate-600 dark:text-slate-300">
                                    {{ __('Simpan') }}
                                </button>
                            </a>
                        </div>
                    </header>
                    <div class="card-body p-6">
                        <div class="card-text">
                            @include('backend.user._form')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="lg:col-span-7 col-span-12">
    </div>
    </div>
@endsection
