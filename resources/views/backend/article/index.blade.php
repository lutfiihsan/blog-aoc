@extends('layouts.dashcode')

@section('title', 'Artikel')

@section('title_main')
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4
            class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
            {{ __('Artikel') }}
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
                    {{ __('Artikel') }}</li>
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
                        {{ __('List Artikel') }}
                    </h4>
                    <div class="card-toolbar">
                        @can('tambah_artikel')
                            <a href="{{ route('backend.categories.create') }}"
                                class="btn btn-sm btn-outline btn-light flex items-center dark:bg-slate-600 dark:text-slate-300">
                                <iconify-icon icon="mdi:plus-circle-outline" class="pr-2"></iconify-icon>
                                {{ __('Tambah Artikel') }}
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
                                                title
                                            </th>
                                            <th scope="col" class="table-th">
                                                author
                                            </th>
                                            <th scope="col" class="table-th">
                                                category
                                            </th>
                                            <th scope="col" class="table-th">
                                                status
                                            </th>
                                            <th scope="col" class="table-th">
                                                published at
                                            </th>
                                            <th scope="col" class="table-th">
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        @forelse ($articles as $article)
                                            <tr>
                                                <td class="table-td">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="table-td">
                                                    {{ $article->title }}
                                                </td>
                                                <td class="table-td">
                                                    {{ $article->user->name }}
                                                </td>
                                                <td class="table-td">
                                                    {{ $article->category->name }}
                                                </td>
                                                <td class="table-td">
                                                    @if ($article->status == 'published')
                                                        <span
                                                            class="px-2 py-1 rounded-full bg-success-500 text-white text-xs font-Inter capitalize">
                                                            {{ $article->status }}
                                                        </span>
                                                    @elseif ($article->status == 'draft')
                                                        <span
                                                            class="px-2 py-1 rounded-full bg-warning-500 text-white text-xs font-Inter capitalize">
                                                            {{ $article->status }}
                                                        </span>
                                                    @else
                                                        <span
                                                            class="px-2 py-1 rounded-full bg-danger-500 text-white text-xs font-Inter capitalize">
                                                            {{ $article->status }}
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="table-td">
                                                    {{ $article->published_at }}
                                                </td>
                                                <td class="table-td">
                                                    @can(['ubah_artikel', 'hapus_artikel'])
                                                        <div class="flex justify-end space-x-2">
                                                            <a href="{{ route('backend.articles.edit', $article->id) }}"
                                                                class="btn btn-sm btn-outline btn-primary flex items-center dark:bg-slate-600 dark:text-slate-300">
                                                                <iconify-icon icon="mdi:pencil" class="pr-2"></iconify-icon>
                                                                {{ __('Edit') }}
                                                            </a>
                                                            <form
                                                                action="{{ route('backend.articles.destroy', $article->id) }}"
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
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
