@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border-2 shadow-md mt-20 rounded-lg">
                    <div class="bg-gray-900 text-white uppercase text-center py-3 px-6 mb-0 font-bold rounded-t-lg">
                        {{ __('Reset Password') }}
                    </div>

                    <form class="pt-5 pb-5 px-5" method="POST" action="{{ route('password.email') }}" novalidate>
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm mb-2 font-bold">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') border-red-500 border @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                            @error('email')
                                <span class="text-red-700 p-2 w-full mt-2 text-sm" role="alert">
                                        <strong>* {{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @if (session('status'))
                            <span class="bg-green-100 border-1 border-green-500 text-green-700 p-4 w-full my-5 block text-sm" role="alert">
                                    <strong>{{ session('status') }}</strong>
                            </span>
                        @endif

                        <div class="flex flex-wrap ">
                                <button type="submit" class="bg-gray-700 w-full hover:bg-gray-900 text-gray-100 rounded-lg
                                p-3 focus:outline-none focus:shadow-outline uppercase font-bold">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
