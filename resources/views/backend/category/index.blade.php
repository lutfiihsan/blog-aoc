@extends('layouts.dashcode')

@section('title', 'Kategori')

@section('title_main')
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4
            class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
            {{ __('Kategori') }}
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
                    {{ __('Kategori') }}</li>
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
                        {{ __('List Kategori') }}
                    </h4>
                    <div class="card-toolbar">
                        @can('tambah_kategori')
                            <a href="{{ route('backend.categories.create') }}"
                                class="btn btn-sm btn-outline btn-light flex items-center dark:bg-slate-600 dark:text-slate-300">
                                <iconify-icon icon="mdi:plus-circle-outline" class="pr-2"></iconify-icon>
                                {{ __('Tambah Kategori') }}
                            </a>
                        @endcan
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
                                                no
                                            </th>
                                            <th scope="col" class="table-th">
                                                nama kategori
                                            </th>
                                            <th scope="col" class="table-th">
                                                slug
                                            </th>
                                            <th scope="col" class="table-th">
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                        @forelse ($categories as $category)
                                            <tr>
                                                <td class="table-td">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="table-td">
                                                    {{ $category->name }}
                                                </td>
                                                <td class="table-td">
                                                    {{ $category->slug }}
                                                </td>
                                                <td class="table-td">
                                                    @can(['ubah_kategori', 'hapus_kategori'])
                                                        <div class="flex justify-end space-x-2">
                                                            <a href="{{ route('backend.categories.edit', $category->id) }}"
                                                                class="btn btn-sm btn-outline btn-primary flex items-center dark:bg-slate-600 dark:text-slate-300">
                                                                <iconify-icon icon="mdi:pencil" class="pr-2"></iconify-icon>
                                                                {{ __('Edit') }}
                                                            </a>
                                                            <form
                                                                action="{{ route('backend.categories.destroy', $category->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-outline btn-danger flex items-center dark:bg-slate-600 dark:text-slate-300">
                                                                    <iconify-icon icon="mdi:trash-can-outline"
                                                                        class="pr-2"></iconify-icon>
                                                                    {{ __('Hapus') }}
                                                                </button>
                                                            </form>
                                                        </div>
                                                    @endcan
                                                </td>
                                            </tr>

                                        @empty
                                            <tr>
                                                <td class="table-td" colspan="4">
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
                        <hr class="mt-2 mb-6 dark:border-slate-700">
                    </div>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
