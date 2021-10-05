@extends('layouts.layout')

@section('content')

    <section class="mx-auto flex justify-center content-center items-center bg-gray-800 w-full h-screen">
        <div class="mx-auto max-w-sm w-full bg-gray-900 rounded-lg shadow pt-6 p-8">
            <h1 class="text-center mx-auto text-white text-2xl font-bold mb-4">Login</h1>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <input type="email" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded @error('email') border-red-500 @enderror" value=" {{ old('email') }}">
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" name="password" id="password " placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded @error('password') border-red-500 @enderror" value="">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    @if (session('status'))
                    <div class="text-white bg-red-500 p-4 rounded font-bold mb-4 mt-2 text-sm">
                        Email/password is not recognised
                    </div>
                    @endif
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
            </form>
        </div>
    </section>

@endsection
