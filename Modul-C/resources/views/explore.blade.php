@extends('template')
@section('content')
<div class="pb-32 pt-28 text-white text-center px-5 lg:px-10 xl:px-32 text-start">
    <p class="text-3xl font-semibold mb-7 text-center">Explore NFT's</p>
    <form action="" method="get">
        <input type="text" name="search" class="bg-white rounded-lg py-3 px-3 w-full mb-14 text-black" placeholder="Search your nft by name">
    </form>
    <div class="flex flex-wrap justify-center">
        @foreach ($nfts as $nft)
        <a href="/nft/{{$nft->id}}">
            <div class="rounded-lg bg-[#e5e5e5] mr-6 w-max overflow-hidden w-[290px] mb-4">
                <img src="/storage/{{$nft->img}}" class="w-full" alt="">
                <div class="p-4">
                    <p class="text-[#5261df]">{{$nft->author}}</p>
                    <p class="text-[#393534] text-lg font-medium mb-2">{{$nft->name}}</p>
                    <p class="text-[#7d726f]">$ {{$nft->price}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
