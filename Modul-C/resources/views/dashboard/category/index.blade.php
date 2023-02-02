@extends('dashboard.template')
@section('content')
    <div class="text-white m-7">
        <p class="text-4xl font-semibold mb-10">Kategori NFT</p>

        <a href="/dashboard/categories/create" class="py-2 px-7 rounded-full bg-blue-500 block mb-6 w-max">Tambah Kategori</a>

        <div class="overflow-auto">
            <table class="border md:block hidden">
                <thead>
                    <tr class="bg-blue-400">
                        <th class="p-3">No</th>
                        <th class="p-3">Nama</th>
                        <th class="p-3">Thumbnail</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="my-2 px-3">{{$loop->iteration}}</td>
                        <td>{{$category->name}}</td>
                        <td class="py-4"><img src="/storage/{{$category->thumb}}" class="w-[120px] rounded-lg" alt=""></td>
                        <td class="flex px-3 py-7 flex-wrap items-center">
                            <a href="/dashboard/categories/{{$category->id}}/edit" class="block mr-3 rounded-full bg-yellow-500 py-2 px-5 text-center">Edit</a>
                            <form action="/dashboard/categories/{{$category->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="py-2 px-5 rounded-full bg-red-500" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="md:hidden block">
                @foreach($categories as $category)
                <div class="bg-blue-400 mb-5 p-3 rounded-lg">
                    <p class="mb-2">Nama : {{$category->name}}</p>
                    <p><img class="w-full mb-3" src="/storage/{{$category->thumb}}" alt=""></p>
                    <div>
                            <a href="/dashboard/categories/{{$category->id}}/edit" class="block mb-3 rounded-full bg-yellow-500 py-2 px-5 text-center">Edit</a>
                            <form action="/dashboard/categories/{{$category->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="py-2 px-5 rounded-full bg-red-500 w-full" type="submit">Hapus</button>
                            </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection