@extends('Layout.BackEnd.app')

@section('content')
    <div class="loginwrapper">
        <div class="lg-inner-column">
            <div class="right-column relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box h-full flex flex-col justify-center">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                                <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
                            </a>
                        </div>
                        <div class="text-center 2xl:mb-10 mb-4">
                            <h4 class="font-medium">Sign in</h4>
                            <div class="text-slate-500 dark:text-slate-400 text-base">
                                Sign in to your account to start using Dashcode
                            </div>
                        </div>
                        <!-- BEGIN: Login Form -->
                        <form class="space-y-4" action='{{ url("admin/dashboard") }}'>
                            <div class="fromGroup">
                                <label class="block capitalize form-label">email</label>
                                <div class="relative ">
                                    <input type="email" name="email" class="  form-control py-2"
                                        placeholder="Add placeholder" value="dashcode@gmail.com">
                                </div>
                            </div>
                            <div class="fromGroup       ">
                                <label class="block capitalize form-label  ">Password</label>
                                <div class="relative "><input type="password" name="password" class="  form-control py-2   "
                                        placeholder="Add placeholder" value="dashcode">
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="hiddens">
                                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6 capitalize">Keep me
                                        signed in</span>
                                </label>
                                <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium"
                                    href="forget-password-one.html">Forgot
                                    Password?
                                </a>
                            </div>
                            <button class="btn btn-dark block w-full text-center">Sign in</button>
                        </form>
                        <!-- END: Login Form -->
                        <div class=" relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
                            <div
                                class=" absolute inline-block bg-white dark:bg-slate-800 left-1/2 top-1/2 transform -translate-x-1/2 px-4 min-w-max
                                    text-sm text-slate-500 dark:text-slate-400font-normal ">
                                Or continue with
                            </div>
                        </div>
                        <div class="max-w-[242px] mx-auto mt-8 w-full">

                            <!-- BEGIN: Social Log in Area -->
                            <ul class="flex">
                                <li class="flex-1">
                                    <a href="#"
                                        class="inline-flex h-10 w-10 bg-[#1C9CEB] text-white text-2xl flex-col items-center justify-center rounded-full">
                                        <img src="assets/images/icon/tw.svg" alt="">
                                    </a>
                                </li>
                                <li class="flex-1">
                                    <a href="#"
                                        class="inline-flex h-10 w-10 bg-[#395599] text-white text-2xl flex-col items-center justify-center rounded-full">
                                        <img src="assets/images/icon/fb.svg" alt="">
                                    </a>
                                </li>
                                <li class="flex-1">
                                    <a href="#"
                                        class="inline-flex h-10 w-10 bg-[#0A63BC] text-white text-2xl flex-col items-center justify-center rounded-full">
                                        <img src="assets/images/icon/in.svg" alt="">
                                    </a>
                                </li>
                                <li class="flex-1">
                                    <a href="#"
                                        class="inline-flex h-10 w-10 bg-[#EA4335] text-white text-2xl flex-col items-center justify-center rounded-full">
                                        <img src="assets/images/icon/gp.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <!-- END: Social Log In Area -->
                        </div>
                        <div
                            class="md:max-w-[345px] mt-6 mx-auto font-normal text-slate-500 dark:text-slate-400mt-12 uppercase text-sm">
                            Don’t have an account?
                            <a href="{{url('register')}}" class="text-slate-900 dark:text-white font-medium hover:underline">
                                Sign up
                            </a>
                        </div>
                    </div>
                    <div class="auth-footer text-center">
                        Copyright 2021, Dashcode All Rights Reserved.
                    </div>
                </div>
            </div>
            <div class="left-column bg-cover bg-no-repeat bg-center "
                style="background-image: url(assets/images/all-img/login-bg.png);">
                <div class="flex flex-col h-full justify-center">
                    <div class="flex-1 flex flex-col justify-center items-center">
                        <a href="index.html">
                            <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10">
                        </a>
                    </div>
                    <div>
                        <div class="black-500-title max-w-[525px] mx-auto pb-20 text-center">
                            Unlock your Project
                            <span class="text-white font-bold">performance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
