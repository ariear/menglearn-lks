@extends('template')
@section('content')
<div class="pb-32 pt-32 text-white text-center px-5 lg:px-10 xl:px-32 text-start">
    <form method="POST" action="/create" class="bg-[#5261df] w-full sm:w-[450px] rounded-lg p-6 mx-auto" enctype="multipart/form-data">
        @csrf
        <p class="text-2xl mb-6 font-medium text-center">Upload NFT</p>
        <div class="flex flex-col mb-4">
            <label for="name" class="font-light mb-1">Nama</label>
            <input type="text" name="name" class="py-2 px-3 rounded-lg text-black" placeholder="tulis nama nft">
            @error('name')
                <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <label for="img" class="font-light mb-1">Upload Gambar NFT</label>
            <input type="file" name="img" class="bg-white py-2 px-3 rounded-lg text-black">
            @error('img')
                <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <label for="category_id" class="font-light mb-1">Pilih Kategori NFT</label>
            <select name="category_id" id="category_id" class="py-2 px-3 rounded-lg text-black" >
                <option value="" selected disabled>Kategori nft mu</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <label for="author" class="font-light mb-1">Nama Author</label>
            <input type="text" name="author" class="py-2 px-3 rounded-lg text-black" placeholder="tulis nama author nft">
            @error('author')
                <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <label for="price" class="font-light mb-1">Harga</label>
            <input type="number" name="price" class="py-2 px-3 rounded-lg text-black" placeholder="tulis harga nft">
            @error('price')
                <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <label for="desc" class="font-light mb-1">Deskripsi</label>
            <textarea name="desc" id="desc" cols="30" rows="10" class="py-2 px-3 rounded-lg text-black"></textarea>
            @error('desc')
                <p class="text-sm text-red-300 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="py-3 w-full rounded-full bg-blue-400">Simpan</button>
    </form>
</div>
@endsection
