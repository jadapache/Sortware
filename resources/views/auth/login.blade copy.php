<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            
            <div class="form-group justify-content-start">
                    <<div class="flex flex-wrap center">
                 {!! htmlScriptTagJsApi() !!}
                        {!! htmlFormSnippet([
                            "theme" => "light",
                            "size" => "samll",
                            "tabindex" => "3",
                            "callback" => "callbackFunction",
                            "expired-callback" => "expiredCallbackFunction",
                            "error-callback" => "errorCallbackFunction",
                        ]) !!} 
            </div>
            </div>

            <div class="form-group row">        
            </div>

            <div class="flex items-center ">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-blue-600 hover:text-blue-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
