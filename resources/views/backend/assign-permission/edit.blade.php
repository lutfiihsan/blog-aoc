@extends('layouts.dashcode')

@section('title', 'Edit Assign Permission')

@section('title_main')
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4
            class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
            {{ __('Edit Assign Permission') }}
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
                    <a href="{{ route('backend.assignpermission.index') }}"
                        class="hover:text-primary-600 dark:hover:text-primary-400">
                        {{ __('Assign Permission') }}
                        <iconify-icon icon="mdi:chevron-right"
                            class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                    </a>
                </li>
                <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                    {{ __('Edit') }} </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="flex justify-start mb-4">
        <a href="{{ route('backend.assignpermission.index') }}"
            class="btn btn-sm btn-outline btn-secondary flex items-center dark:bg-slate-600 dark:text-slate-300">
            <iconify-icon icon="mdi:arrow-left" class="pr-2"></iconify-icon>
            Kembali
        </a>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="lg:col-span-5 col-span-12">
            <div class="card h-full">
                <form action="{{ route('backend.assignpermission.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role_id" value="{{ $role->id }}">
                    <header class="card-header">
                        <h4 class="card-title">{{ __('Hak Akses Role' . ' ' . $role->name) }}</h4>
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
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td class=" table-th border border-slate-100 dark:bg-slate-800 dark:border-slate-700 ">
                                                {{ $permission->name }}
                                            </td>
                                            <td class=" table-th border border-slate-100 dark:bg-slate-800 dark:border-slate-700 ">
                                                <div class="checkbox-area">
                                                    <label class="inline-flex items-center cursor-pointer">
                                                      <input type="checkbox" class="hidden" name="update_role_permissions[]" value="{{ $permission->id }}"
                                                      {{ (in_array($permission->id, $role_permissions)) ? 'checked' : '' }}>
                                                      <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                            <img src="{{ asset('dashcode') }}/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
