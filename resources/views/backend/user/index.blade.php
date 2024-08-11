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
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                    {{ __('Pengguna') }}</li>
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

    <div class="col-span-12">
        <div class="intro-y box">
            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">
                        {{ __('List Pengguna') }}
                    </h4>
                    <div class="card-toolbar">
                        <a href="{{ route('backend.users.create') }}"
                            class="btn btn-sm btn-outline btn-light flex items-center dark:bg-slate-600 dark:text-slate-300">
                            <iconify-icon icon="mdi:plus-circle-outline" class="pr-2"></iconify-icon>
                            {{ __('Tambah Pengguna') }}
                        </a>
                    </div>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                    <thead class="bg-slate-200 dark:bg-slate-700">
                                        <tr>
                                            <th scope="col" class="table-th">
                                                id
                                            </th>
                                            <th scope="col" class="table-th">
                                                nama
                                            </th>
                                            <th scope="col" class="table-th">
                                                email
                                            </th>
                                            <th scope="col" class="table-th">
                                                no. telp / wa
                                            </th>
                                            <th scope="col" class="table-th">
                                                role
                                            </th>
                                            <th scope="col" class="table-th">
                                                avatar
                                            </th>
                                            <th scope="col" class="table-th">
                                                dibuat sejak
                                            </th>
                                            <th scope="col" class="table-th">
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                        @forelse ($users as $user)
                                            <tr>
                                                <td class="table-td">{{ $user->id }}</td>
                                                <td class="table-td">{{ $user->name }}</td>
                                                <td class="table-td">{{ $user->email }}</td>
                                                <td class="table-td">{{ $user->phone_number }}</td>
                                                <td class="table-td">
                                                    @foreach ($user->roles as $user_role)
                                                        <span
                                                            class="badge text-white bg-success-500 dark:text-success-500 dark:bg-opacity-30 capitalize">
                                                            {{ $user_role->name }}
                                                        </span>
                                                    @endforeach
                                                </td>
                                                <td class="table-td">
                                                    @if (file_exists('storage/' . $user->image) && $user->image != null && $user->image != '')
                                                        <a href="{{ asset('storage') . '/' . $user->image }}"
                                                            target="_blank">
                                                            <img src="{{ asset('storage') . '/' . $user->image }}"
                                                                alt="img" width="50" class="rounded-full">
                                                        </a>
                                                    @else
                                                        <img src="{{ asset('dashcode') }}/images/users/user-1.jpg"
                                                            alt="img" width="50" class="rounded-full">
                                                    @endif
                                                </td>
                                                <td class="table-td">{{ $user->created_at->diffForHumans() }}</td>
                                                <td class="table-td">
                                                    @if (in_array('Super Admin', $user->roles->pluck('name')->toArray()))
                                                        {{-- <span class="text-center text-muted"><i>{{ __('Pengguna default') }}</i></span> --}}
                                                    @else
                                                        @can('ubah_pengguna')
                                                            <a href="{{ route('backend.users.edit', $user) }}"
                                                                class="btn btn-sm inline-flex justify-center btn-outline btn-warning flex items-center mr-1">
                                                                <span class="flex items-center">
                                                                    <span>
                                                                        {{ __('Ubah') }}
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        @endcan
                                                    @endif
                                                    @can('lihat_pengguna')
                                                        <a href="{{ route('backend.users.show', $user) }}"
                                                            class="btn btn-sm inline-flex justify-center btn-outline btn-dark flex items-center dark:bg-slate-500 dark:text-slate-300">
                                                            <span class="flex items-center">
                                                                <span>
                                                                    {{ __('Detail') }}
                                                                </span>
                                                            </span>
                                                        </a>
                                                    @endcan
                                                </td>
                                            </tr>

                                        @empty
                                            <tr>
                                                <td class="table-td" colspan="8">
                                                    <div class="flex items center justify-center py-6">
                                                        <div class="text-center">
                                                            <iconify-icon icon="mdi:emoticon-sad-outline"
                                                                class="text-4xl text-slate-500"></iconify-icon>
                                                            <p
                                                                class="text-slate
                                                        dark:text-white font-Inter font-medium text-lg mt-4">
                                                                {{ __('Data tidak ditemukan') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
