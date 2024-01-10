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
                                <div class="mb-4">
                                    <x-forms.elements.inputemail type="email" id="email" name="email" class="form-control-sm border border-0 shadow-none border-bottom rounded-0" :label="__('Email')" :value="old('email')"/>
                                    <x-input-error :messages="$errors->get('email')" class="" />
                                </div>
                                <div class="mb-4">
                                    <x-forms.elements.inputpassword type="password" id="password" name="password" class="mb-4" :label="__('Password')" :value="old('password')"/>
                                    <x-input-error :messages="$errors->get('password')" class="" />
                                </div>
                                <x-primary-button class="w-100 rounded-pill">{{ __('Log in') }}</x-primary-button>
                            </div>
                            <p class="fw-lighter mt-5">Don't have an account? <a class="fw-semibold text-dark text-decoration-none" href="{{ route('register') }}">{{ __('Register Now') }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
