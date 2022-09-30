@extends('layouts.app')

@section('content')
<section class="flex justify-center items-center">
    <div class="bg-white rounded shadow-full w-full md:w-1/3 mx-2 md:mx-0 text-center">
        <div class="flex justify-center items-center py-6">
            <img class="h-20 mr-4" src="/assets/contractuo.webp" alt="contractuo logo">
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="bg-red-600 rounded text-white my-3 mx-6 p-3">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="my-8">
                <input type="text" name="name" placeholder="Name" class="px-4 py-2 bg-gray-200 rounded shadow w-2/3">
            </div>

            <div class="my-8">
                <input type="text" name="email" placeholder="Email" class="px-4 py-2 bg-gray-200 rounded shadow w-2/3">
            </div>

            <div class="mb-8">
                <input type="password" name="password" placeholder="Password" class="px-4 py-2 bg-gray-200 rounded shadow  w-2/3">
            </div>

            <div class="mb-8">
                <input type="password" name="password_confirmation" placeholder="Password confirmation" class="px-4 py-2 bg-gray-200 rounded shadow  w-2/3">
            </div>

            <div class="flex justify-center items-center">
                <button class="text-white bg-blue-400 px-4 py-2 rounded shadow duration-300 hover:bg-blue-600">Register</button>
            </div>
        </form>
    </div>
</section>
@endsection