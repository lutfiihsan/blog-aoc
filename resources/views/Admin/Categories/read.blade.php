@extends('Layout.Backend.dashcode')

@section('content')
    <div class="card">
        <header class=" card-header noborder">
            <h4 class="card-title">
                Categories
            </h4>
            <div class="card-action">
                <button data-bs-toggle="modal" data-bs-target="#vertically_center" 
                    class="bg-slate-100 dark:bg-slate-700 text-slate-900 dark:text-white px-3 py-2 rounded-[999px] flex items-center space-x-2 hover:bg-slate-200 dark:hover:bg-slate-600 transition-all duration-150">
                    Create Category
                </button>
            </div>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="overflow-x-auto mx-0">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                            <thead class="bg-slate-200 dark:bg-slate-700">
                                <tr>
                                    <th scope="col" class=" table-th ">
                                        No
                                    </th>
                                    <th scope="col" class=" table-th ">
                                        Category
                                    </th>
                                    <th scope="col" class=" table-th " style="text-align: center !important;">
                                        Slug
                                    </th>
                                    <th scope="col" class=" table-th ">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                @for ($i = 1; $i < 6; $i++)
                                    <tr>
                                        <td class="table-td">82</td>
                                        <td class="table-td">PHP</td>
                                        <td class="table-td "
                                            style="text-transform: lowercase !important;text-align: center !important;">
                                            php
                                        </td>
                                        <td class="table-td ">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                                <button class="action-btn" type="button">
                                                    <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                </button>
                                                <button class="action-btn" type="button">
                                                    <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
