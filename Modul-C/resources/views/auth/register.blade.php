@extends('template')
@section('content')
<div class="pb-32 pt-32 text-white text-center px-5 lg:px-10 xl:px-32 text-start">
    <form method="POST" action="/register" class="bg-[#5261df] w-[450px] rounded-lg p-6 mx-auto">
        @csrf
        <p class="text-2xl mb-6 font-medium text-center">Register</p>
        <div class="flex flex-col mb-4">
            <label for="name" class="font-light mb-1">Nama</label>
            <input type="text" name="name" class="py-2 px-3 rounded-lg text-black" placeholder="tulis namamu">
            @error('name')
                <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <label for="email" class="font-light mb-1">Email</label>
            <input type="email" name="email" class="py-2 px-3 rounded-lg text-black" placeholder="tulis emailmu">
            @error('email')
                <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col mb-8">
            <label for="password" class="font-light mb-1">Password</label>
            <input type="password" name="password" class="py-2 px-3 rounded-lg text-black" placeholder="tulis password disini">
            @error('password')
                <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="py-3 w-full rounded-full bg-blue-400">Register</button>
        <p class="text-sm mt-3 text-center">Sudah punya akun? <a href="/login" class="text-blue-400">Login cuy</a></p>
    </form>
</div>
@endsection
