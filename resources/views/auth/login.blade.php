@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border-2 shadow-md mt-20 rounded-lg">
                    <div class="bg-gray-900 text-white uppercase text-center py-3 px-6 mb-0 font-bold rounded-t-lg">
                        {{ __('Login') }}
                    </div>


                    <form class="py-10 px-5" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm mb-2 font-bold">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                            @error('email') <span class="text-red-700 p-2 w-full mt-2 text-sm" role="alert">
                                    <strong>* {{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm mb-2 font-bold">{{ __('Password') }}</label>
                            <input id="password" type="password" class="p-3 bg-gray-200 rounded form-input w-full  @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                            @error('password') <span class="text-red-700 p-2 w-full mt-2 text-sm" role="alert">
                                    <strong>* {{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6 font-bold">
                                <input class="mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="block text-gray-700 text-sm mb-2" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="bg-gray-700 w-full hover:bg-gray-900 text-white rounded-lg
                                p-3 focus:outline-none focus:shadow-outline uppercase font-bold"
                            >
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-gray-700 mt-5 text-center w-full font-bold" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
