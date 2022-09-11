<x-main-layout>
    <div class="h-screen place-content-center grid items-start">
        <h1 class="col-start-1 row-start-1 font-bold text-5xl -translate-y-full text-center leading-none pb-24">Mona</h1>

        <x-form.errors/>

        <form method="POST" action="{{ route('register') }}" class="col-start-1 row-start-1 flex flex-col items-center">
            @csrf

            <x-form.group class="w-[32rem]">
                <x-form.label for="email">Email</x-form.label>
                <x-form.input id="email" type="email" name="email" placeholder="Email" :value="old('email')" required/>
            </x-form.group>

            <x-form.group class="w-[32rem]">
                <x-form.label for="password">Password</x-form.label>
                <x-form.input id="password" type="password" name="password" placeholder="Password" autocomplete="new-password" required/>
            </x-form.group>

            <x-form.group class="w-[32rem]">
                <x-form.label for="password_confirmation">Password confirmation</x-form.label>
                <x-form.input id="password_confirmation" type="password" name="password_confirmation" placeholder="Password confirmation" required/>
            </x-form.group>

            <a class="link mt-8 mb-12" href="{{ route('login') }}">Already registered?</a>

            <x-button>Register</x-button>
        </form>
    </div>
</x-main-layout>
