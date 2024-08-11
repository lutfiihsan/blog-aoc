@extends('layouts.auth')

@section('title', 'Login')

@section('main')
    <div class="loginwrapper">
        <div class="lg-inner-column">
            <div class="left-column relative z-[1]">
                <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
                </div>
                <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1]">
                    <img src="{{ asset('dashcode') }}/images/auth/ils1.svg" alt="" class=" h-full w-full object-contain">
                </div>
            </div>
            <div class="right-column relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box h-full flex flex-col justify-center">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                        </div>
                        <div class="text-center 2xl:mb-6 mb-4">
                            <h4 class="font-medium">Login Sistem</h4>
                            <div class="text-slate-500 text-base">
                                {{ __('Silahkan lengkapi email dan password anda') }}
                            </div>
                        </div>
                        <!-- BEGIN: Login Form -->
                        <form action="{{ route('login') }}" method="post" class="space-y-4">
                            @csrf
                            <div class="input-area">
                                <label class="block capitalize form-label">email</label>
                                <div class="relative">
                                    <input type="email" name="email" class="form-control py-2 @error('email') !border-danger-500 @enderror"
                                    placeholder="Email" value="{{ old('email') }}" autofocus required>
                                </div>
                                @error('email')
                                <span class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-area">
                                <label class="block capitalize form-label">password</label>
                                <div class="relative">
                                    <input type="password" name="password" class="form-control py-2 @error('password') !border-danger-500 @enderror"
                                    placeholder="Password" value="{{ old('password') }}" autofocus required>
                                </div>
                                @error('password')
                                <span class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex justify-between">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="hiddens" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                    <span class="ml-2 text-slate-500 dark:text-slate-400 text-sm leading-6 capitalize">
                                        {{ __('Ingat Saya') }}
                                    </span>
                                </label>
                            </div>
                            <button class="btn btn-dark block w-full text-center">Sign in</button>
                        </form>
                        <!-- END: Login Form -->
                    </div>
                    <div class="auth-footer text-center">
                        Copyright 2021, Dashcode All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
