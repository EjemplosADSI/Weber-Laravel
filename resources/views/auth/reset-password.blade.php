@extends('../layout/' . $layout)

@section('head')
    <title xmlns="http://www.w3.org/1999/html">{{ __('Reset Password') }} - {{ env('APP_NAME', 'Laravel APP') }}
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
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">{{ __('Reset Password') }}</h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">
                        {{ __("A few more clicks to sign in to your account.") }}
                        {{ __('Manage all your process in one place.') }}
                    </div>
                    <!-- Confirm Password -->
                    <form method="POST" id="change-password-form" action="{{ route('password.store') }}">
                        @csrf
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="intro-x mt-8">
                            <!-- Email Address -->
                            <input id="email" name="email" type="email"
                                   {{ session('status') ? 'disabled' : '' }}
                                   class="intro-x login__input form-control py-3 px-4 block"
                                   placeholder="{{ __('Email') }}" value="{{ old('email', $request->email) }}" required
                                   autofocus>
                            <div id="error-email" class="login__input-error text-danger mt-2">
                                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                            </div>
                        </div>

                        <div class="intro-x mt-8">
                            <!-- Password -->
                            <input id="password" name="password" type="password"
                                   class="intro-x login__input form-control py-3 px-4 block"
                                   placeholder="{{ __('Password') }}" value="" required>
                            <div id="error-password" class="login__input-error text-danger mt-2">
                                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                            </div>
                        </div>

                        <div class="intro-x mt-8">
                            <!-- Password Confirmation -->
                            <input id="password_confirmation" name="password_confirmation" type="password"
                                   class="intro-x login__input form-control py-3 px-4 block"
                                   placeholder="{{ __('Confirm Password') }}" value="" required>
                            <div id="error-password-confirm" class="login__input-error text-danger mt-2">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                            </div>
                        </div>
                        <input type="submit" id="btn-forget"
                               class="btn btn-primary py-3 px-4 mt-2 w-full xl:mr-3 align-top"
                               value="{{ __('Reset Password') }}"/>
                    </form>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>
@endsection
