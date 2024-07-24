<x-sample>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="clean-block clean-form dark" style="background: linear-gradient(6deg, #ed6662, white);">
        <div class="container" style="height: 50px">

        </div>
        <div class="container" >

            <div class="block-heading">
                <h2 class="text-info"><strong><span style="color: rgb(237, 102, 98);">Admin Register</span></strong></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <form method="POST" action="{{ route('admin.register') }}" style="border-color: #ed6662;">
                @csrf
                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control item" type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" data-bs-theme="light">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control item" type="email" id="email" name="email" :value="old('email')" required autocomplete="username" data-bs-theme="light">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password" required autocomplete="new-password" data-bs-theme="light">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" data-bs-theme="light">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4" style="margin-left: 100px">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4" style="background-color: #ed6662;">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </section>
</x-sample>
