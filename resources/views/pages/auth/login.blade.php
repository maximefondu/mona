<x-dashboard-layout>

    <div class="h-screen flex flex-col justify-center items-center">
        <h1 class="font-bold text-5xl mb-32">Mona</h1>

        <form method="POST" action="{{ route('login') }}" class="flex flex-col items-center">
            @csrf

            <x-form.group class="w-[32rem]">
                <x-form.label for="email">Email</x-form.label>
                <x-form.input id="email" name="email" type="email" placeholder="Email" required
                              :value="old('email')"/>
            </x-form.group>

            <x-form.group class="w-[32rem]">
                <x-form.label for="password">Password</x-form.label>
                <x-form.input id="password" name="password" type="password" placeholder="Password" required
                              autocomplete="current-password"/>
            </x-form.group>

            <x-button type="submit" class="mt-16">Login</x-button>

            <!-- Remember Me -->
            {{--<label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                       name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>--}}

            {{--@if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif--}}
        </form>
    </div>
</x-dashboard-layout>
