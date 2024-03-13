@extends('Layout.Backend.dashcode')

@section('content')
    <h6>Dashboard</h6>
    <div class="grid grid-cols-12 gap-5 mb-5">
        <div class="2xl:col-span-3 lg:col-span-4 col-span-12">
            <div class="bg-no-repeat bg-cover bg-center p-4 rounded-[6px] relative"
                style="background-image: url({{ asset('assets/images/all-img/widget-bg-3.png') }})">
                <div class="max-w-[180px]">
                    <h4 class="text-xl font-medium text-white mb-1">
                        <span class="block font-normal">Welcome,</span>
                        <span class="block">Albert Flores</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="2xl:col-span-3 lg:col-span-4 col-span-12">
            <div class="card">
                <div class="card-body p-5">
                    <div class="flex space-x-3 rtl:space-x-reverse">
                        <div class="flex-none">
                            <div
                                class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#E5F9FF] dark:bg-slate-900	 text-slate-500">
                                <iconify-icon icon="heroicons:users"></iconify-icon>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                Blogger
                            </div>
                            <div class="text-slate-900 dark:text-white text-lg font-medium">
                                3,564
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="2xl:col-span-3 lg:col-span-4 col-span-12">
            <div class="card">
                <div class="card-body p-5">
                    <div class="flex space-x-3 rtl:space-x-reverse">
                        <div class="flex-none">
                            <div
                                class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#FFEDE6] dark:bg-slate-900	 text-slate-500">
                                <iconify-icon icon="heroicons:document-text"></iconify-icon>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                Blogs Published
                            </div>
                            <div class="text-slate-900 dark:text-white text-lg font-medium">
                                3,564
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="2xl:col-span-3 lg:col-span-4 col-span-12">
            <div class="card">
                <div class="card-body p-5">
                    <div class="flex space-x-3 rtl:space-x-reverse">
                        <div class="flex-none">
                            <div
                                class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#EAE6FF] dark:bg-slate-900	 text-slate-500">
                                <iconify-icon icon="heroicons:tag"></iconify-icon>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                Categories
                            </div>
                            <div class="text-slate-900 dark:text-white text-lg font-medium">
                                3,564
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
