<x-sample>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="clean-block clean-form dark" style="background: linear-gradient(6deg, #ed6662, white);">
        <div class="container" style="height: 50px">

        </div>
        <div class="container" >
            <div class="block-heading">
                <h2 class="text-info"><strong><span style="color: rgb(237, 102, 98);">Admin Log In</span></strong></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <form method="POST" action="{{ route('admin.login') }}" style="border-color: #ed6662;">
                @csrf
                <!-- Email Address -->
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control item" type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" data-bs-theme="light">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password" required autocomplete="current-password" data-bs-theme="light">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember" data-bs-theme="light">
                        <label class="form-check-label" for="remember_me">Remember me</label>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4" style="margin-left: 100px">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3" style="background-color: #ed6662;">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </section>
</x-sample>
