@extends('../layout/' . $layout)

@section('head')
    <title xmlns="http://www.w3.org/1999/html">{{ __('Verify Email Address') }} - {{ env('APP_NAME', 'Laravel APP') }}
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
                        {{ __("Verify Email Address") }}
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">
                        {{ __('This is a protected area') }}
                    </div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">{{ __('Protected Area') }}</h2>

                    @if (session('status'))
                        <x-auth-session-status class="mb-4" :status="session('status')"/>
                    @else
                        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                        </div>
                    @endif

                    <form method="POST" id="confirm-password-form" action="{{ route('password.confirm') }}">
                        @csrf
                        <!-- Password -->
                        <div class="intro-x mt-8">
                            <!-- Password -->
                            <input id="password" name="password" type="password"
                                   class="intro-x login__input form-control xl:w-3/4 py-3 px-4 block"
                                   placeholder="{{ __('Password') }}" value="" required>
                            <div id="error-password" class="login__input-error text-danger mt-2">
                                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                            </div>
                        </div>

                        <input type="submit" id="btn-forget"
                               class="btn btn-primary py-3 px-4 w-full xl:w-3/4 xl:mr-3 mt-2 align-top"
                               value="{{ __('Confirm') }}"/>

                    </form>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>
@endsection
