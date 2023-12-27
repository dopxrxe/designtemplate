<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="vh-100 bg-gray-300">
            <div class="row g-0">
                <div class="col-8"></div>
                <div class="col-4">
                    <div class="p-3 vh-100">
                        <div class="p-5 bg-white h-100 d-flex flex-column justify-content-center align-items-center gap-2 rounded-4">
                            <img src="{{url('/assets/images/logo/Logo-PTDI-x-INHAN.png')}}" class="mb-4" width="96" height="96" alt="">
                            <h1 class="fw-semibold">
                                Welcome back!
                            </h1>
                            <p>Please enter your details</p>
                            <div class="w-100 mt-4">
                                <x-forms.elements.inputemail type="email" id="email" name="email" class="" :value="__('Email')"/>
                                <x-forms.elements.inputpassword type="password" id="password" name="password" class="" :value="__('Password')"/>
                                <x-primary-button class="w-100 rounded-pill">{{ __('Log in') }}</x-primary-button>
                                {{-- <a class="btn btn-dark rounded-pill w-100 fw-semibold" href="{{ route('login') }}">Log In</a> --}}
                            </div>
                            <p class="fw-lighter mt-5">Don't have an account? <a class="fw-semibold text-dark text-decoration-none" href="{{route('register')}}">Sign up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
