@extends('template')
@section('content')
<div class="pb-32 pt-28 text-white text-center px-5 lg:px-10 xl:px-32 text-start">
        <p class="text-3xl font-semibold mb-16">Keranjang</p>

        <div class="overflow-auto">
            <table class="border md:block hidden w-max">
                <thead>
                    <tr class="bg-blue-400">
                        <th class="p-3">No</th>
                        <th class="p-3">Nama</th>
                        <th class="p-3">Kategori</th>
                        <th class="p-3">Thumbnail</th>
                        <th class="p-3">Price</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carts as $cart)
                    <tr>
                        <td class="my-2 px-3">{{$loop->iteration}}</td>
                        <td>{{$cart->nft->name}}</td>
                        <td>{{$cart->nft->category->name}}</td>
                        <td class="py-4"><img src="/storage/{{$cart->nft->img}}" class="w-[120px] rounded-lg" alt=""></td>
                        <td class="px-3">{{$cart->nft->price}}</td>
                        <td>
                            <form action="/cart/{{$cart->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="py-2 px-5 rounded-full bg-red-500" type="submit">Hapus dari keranjang</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="md:hidden block">
                @foreach($carts as $cart)
                <div class="bg-blue-400 mb-5 p-3 rounded-lg">
                    <p class="mb-2">Nama : {{$cart->nft->name}}</p>
                    <p class="mb-2">Kategori : {{$cart->nft->category->name}}</p>
                    <p><img class="w-full mb-3" src="/storage/{{$cart->nft->img}}" alt=""></p>
                    <form action="/cart/{{$cart->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="py-2 px-5 rounded-full bg-red-500" type="submit">Hapus dari keranjang</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
</div>
@endsection
