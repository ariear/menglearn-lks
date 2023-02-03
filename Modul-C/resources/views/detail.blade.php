@extends('template')
@section('content')
<div class="pb-32 pt-28 text-white text-center px-5 lg:px-10 xl:px-32 text-start">
        <p class="text-3xl font-semibold mb-16">Detail NFT</p>

        <div class="flex flex-wrap">
            <img src="/storage/{{$nft->img}}" class="rounded-lg w-[300px] lg:sticky top-20 h-[400px] object-cover lg:w-[400px] lg:mr-5 xl:mr-10" alt="">
            <div class="text-start">
                <p class="text-2xl font-semibold mt-2">{{$nft->name}}</p>
                <p class="text-sm text-gray-300 mb-2">By {{$nft->author}}</p>
                <p class="text-sm text-yellow-300 mb-2">$ {{$nft->price}}</p>
                <p class="mb-4">Category : <button class="py-2 px-5 ml-2 rounded-full text-sm bg-[#5261df]">{{$nft->category->name}}</button></p>
                <p class="mb-6 lg:w-[500px]">{{$nft->desc}}</p>
                <form action="/cart/{{$nft->id}}" method="post">
                    @csrf
                    <button type="submit" class="py-2 px-10 rounded-full bg-[#69a8d2]">Add To Cart</button>
                </form>
            </div>
        </div>
</div>
@endsection
