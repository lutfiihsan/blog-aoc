@extends('layouts.dashcode')

@section('title', 'Assign Permission')

@section('title_main')
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4
            class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
            {{ __('Assign Permission') }}
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
                    {{ __('Assign Permission') }}</li>
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
                        {{ __('List Assign Permission') }}
                    </h4>
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
                                                nama role
                                            </th>
                                            <th scope="col" class="table-th">
                                                permission
                                            </th>
                                            <th scope="col" class="table-th">
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                        @forelse ($roles as $role)
                                            <tr>
                                                <td class="table-td">{{ $role->id }}</td>
                                                <td class="table-td">
                                                    {{ $role->name }}
                                                </td>
                                                <td class="table-td">
                                                    @foreach ($role->permissions()->get() as $permission)
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium text-white bg-success-500 dark:text-success-500 dark:bg-opacity-30">
                                                            {{ $permission->name }}
                                                        </span>
                                                    @endforeach
                                                </td>
                                                <td class="table-td">
                                                    @if ($role->name == "Super Admin")
                                                        <span class="text-center text-muted"><i>{{ __('Pengguna default') }}</i></span>
                                                    @else
                                                        @can('ubah_role')
                                                            <a href="{{ route('backend.assignpermission.edit', $role) }}"
                                                                class="btn btn-sm inline-flex justify-center btn-outline btn-warning flex items-center mr-1">
                                                                <span class="flex items-center">
                                                                    <span>
                                                                        {{ __('Ubah') }}
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        @endcan
                                                    @endif
                                                </td>
                                            </tr>

                                        @empty
                                            <tr>
                                                <td class="table-td" colspan="5">
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
