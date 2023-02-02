@extends('dashboard.template')
@section('content')
    <div class="text-white m-7">
        <p class="text-4xl font-semibold mb-10">Edit Kategori</p>

        <form action="/dashboard/categories/{{$category->id}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="flex flex-col mb-4">
                <label for="name" class="font-light mb-1">Name</label>
                <input type="text" name="name" value="{{$category->name}}" class="py-2 px-3 rounded-lg text-black" placeholder="tulis kategori">
                @error('name')
                    <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label for="thumb" class="font-light mb-1">Thumbnail</label>
                <input type="file" name="thumb" class="py-2 px-3 bg-white rounded-lg text-black">
                <input type="file" name="thumb_old" value="{{$category->thumb}}" class="py-2 px-3 hidden bg-white rounded-lg text-black">
                @error('thumb')
                    <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="py-2 px-7 rounded-full bg-blue-500">Simpan</button>
        </form>
    </div>
@endsection