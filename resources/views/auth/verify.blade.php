@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-20 text-center">
    <div class="text-2xl my-5 font-bold">{{ __('Verify Your Email Address') }}</div>

    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    <p class="font-semibold">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
    <p class="mt-3 font-medium">{{ __('If you did not receive the email') }}</p>

    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class=" mt-10 max-w-sm bg-gray-700 w-full hover:bg-gray-900 text-white rounded-lg
        p-3 focus:outline-none focus:shadow-outline uppercase font-bold">{{ __('click here to request another') }}</button>
    </form>
</div>
@endsection
