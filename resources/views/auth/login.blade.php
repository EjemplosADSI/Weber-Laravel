@extends('../layout/' . $layout)

@section('head')
    <title xmlns="http://www.w3.org/1999/html">{{ __('Log in') }} - {{ env('APP_NAME', 'Laravel APP') }}
        - {{ env('APP_DESCRIPTION', 'Laravel APP') }}</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-6"
                         src="{{ asset('build/assets/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3">
                        {{ env('APP_NAME', 'Laravel APP') }}
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Icewall Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                         src="{{ asset('build/assets/images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        {!! nl2br(__("A few more clicks to \nsign in to your account.")) !!}
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">
                        {{ __('Manage all your process in one place.') }}
                    </div>
                </div>
            </div>
            <!-- END: Login Info -->

            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">{{ __('Log in') }}</h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">
                        {{ __("A few more clicks to sign in to your account.") }}
                        {{ __('Manage all your process in one place.') }}
                    </div>
                    <div class="intro-x mt-8">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')"/>
                        <form method="POST" id="login-form" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Address -->
                            <input id="email" name="email" type="email"
                                   class="intro-x login__input form-control py-3 px-4 block"
                                   placeholder="{{ __('Email') }}" value="{{ old('email') }}" required autofocus>
                            <div id="error-email" class="login__input-error text-danger mt-2">
                                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                            </div>
                            <!-- Password -->
                            <input id="password" name="password" type="password"
                                   class="intro-x login__input form-control py-3 px-4 block mt-4"
                                   placeholder="{{ __('Password') }}" value="password" required>
                            <div id="error-password" class="login__input-error text-danger mt-2">
                                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                            </div>
                            <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                                <div class="flex items-center mr-auto">
                                    <!-- Remember Me -->
                                    <input id="remember_me" name="remember" type="checkbox"
                                           class="form-check-input border mr-2">
                                    <label class="cursor-pointer select-none"
                                           for="remember_me">{{ __('Remember me') }}</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                       href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                                <input type="submit" id="btn-login"
                                       class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                                       value="{{ __('Log in') }}"/>
                                {{--                                <a id="btn-register" href="{{ route('register') }}"--}}
                                {{--                                   class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">--}}
                                {{--                                    {{ __('Register') }}</a>--}}
                            </div>
                            <div
                                class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">
                                {{ __('By signin up, you agree to our') }}
                                <a class="text-primary dark:text-slate-200"
                                   href="{{ route('terms_user') }}"> {{ __('Terms and Conditions & Privacy Policy') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
@endsection
