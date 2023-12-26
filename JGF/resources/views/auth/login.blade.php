<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-center mt-10 mb-12 text-xl">出展者様向けマイページ</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('ログインID')" />
            <x-text-input id="email" class="block mt-1 w-full ml-3 input_default" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full ml-3 input_default col-md-6"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> -->

        <div class="flex items-center justify-center mt-8">
            <x-primary-button class="ml-3 btn_default">
                {{ __('ログイン') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-start mt-12 mb-12">
            <p>ログインID/パスワードを忘れた方は</p>            
            @if (Route::has('password.request'))
            <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('こちら') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-start mb-8">
            <p>ログインIDをお持ちでない方は下記より 新規登録をお願いいたします。</p>
        </div>
        
        <div class="flex items-center justify-center mb-12">
            <a href="/register" class="ml-3 btn_default">
                {{ __('新規登録') }}
            </a>
        </div>

    </form>
</x-guest-layout>
