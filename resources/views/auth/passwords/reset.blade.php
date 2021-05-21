@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border-2 shadow-md mt-20 rounded-lg">
                    <div class="bg-gray-900 text-white uppercase text-center py-3 px-6 mb-0 font-bold rounded-t-lg">
                        {{ __('Reset Password') }}
                    </div>

                    <form class="py-5 px-5" method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm mb-2 font-bold">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') border-red-500 border @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>
                            @error('email') <span class="text-red-700 p-2 w-full mt-2 text-sm" role="alert">
                                    <strong>* {{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm mb-2 font-bold">{{ __('Password') }}</label>
                            <input id="password" type="password" class="p-3 bg-gray-200 rounded form-input w-full @error('password') border-red-500 border @enderror" name="password" autocomplete="new-password">
                            @error('password') <span class="text-red-700 p-2 w-full mt-2 text-sm" role="alert">
                                    <strong>* {{ $message }}</strong> </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password-confirm" class="block text-gray-700 text-sm mb-2 font-bold">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="p-3 bg-gray-200 rounded form-input w-full" name="password_confirmation"  autocomplete="new-password">
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="bg-gray-700 w-full hover:bg-gray-900 text-white rounded-lg
                            p-3 focus:outline-none focus:shadow-outline uppercase font-bold">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
