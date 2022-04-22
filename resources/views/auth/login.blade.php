@extends('layouts.app')

@section('content')
    <div>
        <div class="xl:px-20 md:px-10 sm:px-6 px-4 md:py-12 pt-9 pb-0 2xl:mx-auto 2xl:container md:flex items-center justify-center">
            <div class="md:hidden sm:mb-8 mb-6">
                <div class="flex items-center">
                    <img src="/img/logo_uc.png" alt="Logo UC" class="w-12 sm:w-16 mr-2">
                    <img src="/img/logo_su.png" alt="Logo SU" class="w-12 sm:w-16 mr-3">
                    <div class="flex flex-col">
                        <h2 class="sm:block text-lg sm:text-2xl text-gray-700 font-bold leading-normal">Technopreneruship Workshop</h2>
                        <h2 class="sm:block teext-base sm:text-xl text-gray-700 font-bold leading-normal">2022</h2>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg xl:w-1/3 lg:w-5/12 md:w-1/2 w-full lg:px-10 sm:px-6 sm:py-10 px-6 py-10">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">Login to your account</p>
                    <div class="mt-4">
                        <label for="username" class="text-sm font-medium leading-none text-gray-800"> Username </label>
                        <input id="username" type="text" class="border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-6 w-full">
                        <label for="pass" class="text-sm font-medium leading-none text-gray-800"> Password </label>
                        <div class="relative flex items-center justify-center">
                            <input id="password" type="password" class="border rounded text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="mt-8">
                        <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded-lg hover:bg-indigo-600 py-4 w-full">Login</button>
                    </div>
                </form>
            </div>
            <div class="xl:w-1/3 md:w-1/2 lg:ml-16 ml-0 md:ml-8 md:mt-0 mt-6">
                <div class="pl-8 md:block hidden">
                    <div class="flex items-center">
                        <img src="/img/logo_uc.png" alt="Logo UC" class="w-16 mr-2">
                        <img src="/img/logo_su.png" alt="Logo SU" class="w-16 mr-3">
                        <div class="flex flex-col">
                            <h2 class="hidden sm:block text-2xl text-gray-700 font-bold leading-normal">Technopreneruship Workshop</h2>
                            <h2 class="hidden sm:block text-xl text-gray-700 font-bold leading-normal">2022</h2>
                        </div>
                    </div>
                </div>
                <div class="flex items-start mt-8">
                    <div>
                    <p class="sm:text-2xl text-xl text-center text-gray-600 pl-0 md:pl-2.5">If you are having trouble logging in to your account, please contact a committee member</p>
                </div>
            </div>
        </div>
    </div>
@endsection
