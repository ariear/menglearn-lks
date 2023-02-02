@extends('dashboard.template')
@section('content')
    <div class="text-white m-7">
        <p class="text-4xl font-semibold mb-10">NFT</p>

        <div class="overflow-auto">
            <table class="border md:block hidden">
                <thead>
                    <tr class="bg-blue-400">
                        <th class="p-3">No</th>
                        <th class="p-3">Nama</th>
                        <th class="p-3">Author</th>
                        <th class="p-3">Img</th>
                        <th class="p-3">Kategori</th>
                        <th class="p-3">Harga</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nfts as $nft)
                    <tr>
                        <td class="my-2 px-3">{{$loop->iteration}}</td>
                        <td>{{$nft->name}}</td>
                        <td>{{$nft->author}}</td>
                        <td class="py-4"><img src="/storage/{{$nft->img}}" class="w-[120px] rounded-lg" alt=""></td>
                        <td class="px-4">{{$nft->category->name}}</td>
                        <td class="px-4">{{$nft->price}}</td>
                        <td class="flex px-3 py-7 flex-wrap items-center">
                            <form action="/dashboard/nft/{{$nft->id}}" method="post">
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
                @foreach($nfts as $nft)
                <div class="bg-blue-400 mb-5 p-3 rounded-lg">
                    <p class="mb-2">Nama : {{$nft->name}}</p>
                    <p class="mb-2">Author : {{$nft->author}}</p>
                    <p><img class="w-full mb-3" src="/storage/{{$nft->img}}" alt=""></p>
                    <p class="mb-2">Kategori : {{$nft->category->name}}</p>
                    <p class="mb-3">Harga : {{$nft->price}}</p>
                    <div>
                            <form action="/dashboard/nft/{{$nft->id}}" method="post">
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