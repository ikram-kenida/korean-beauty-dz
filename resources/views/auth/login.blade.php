
<x-guest-layout style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    <h1 class="text-center" style="font-family: Georgia, 'Times New Roman', Times, serif; color:gray;font-size:30px;margin-bottom:50px">Se connecter</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="custom-input">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="d-flex">
        <!-- Remember Me -->
        <div class="block mt-4 p-2 w-100">
            <label for="remember_me" class=" items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
            </label>
        </div>
  <x-primary-button class="ms-3 items-center mt-3 mb-3 p-2 flex-shrink-1 btn btn-secondary" style="background-color: gray">
                {{ __('Se connecter') }}
            </x-primary-button>

        </div>
        <br><br>
         <a class=" text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('register') }}">
                {{ __("Vous n'avez pas un compte  ?") }}
            </a>
    </form>
</x-guest-layout>

