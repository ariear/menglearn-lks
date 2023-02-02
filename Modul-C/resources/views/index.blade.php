@extends('template')
@section('content')
<div class="pb-32 pt-40 text-white text-center bg-[url('/assets/bg.png')] bg-cover bg-top">
    <p class="md:text-5xl text-3xl md:w-[500px] w-[90vw] mx-auto mb-6 font-semibold">Find  Your Best NFT, And Sell It</p>
    <div>
        <button class="py-3 px-7 rounded-full bg-[#5261df] sm:text-base text-sm mr-2 sm:mr-4">Learn More</button>
        <button class="py-3 px-7 rounded-full bg-[#5261df] sm:text-base text-sm">Explore Now</button>
    </div>
</div>

<div class="py-14 px-16 lg:px-48">
    <p class="text-white mb-5 font-medium text-xl">Latest NFT's</p>
    <div class="flex justify-center flex-wrap">
        @foreach($nfts as $nft)
        <div class="rounded-lg bg-[#e5e5e5] mr-6 xl:mb-0 mb-4 w-max overflow-hidden">
            <img src="/storage/{{$nft->img}}" class="w-[280px]" alt="">
            <div class="p-4">
                <p class="text-[#5261df]">{{$nft->author}}</p>
                <p class="text-[#393534] text-lg font-medium mb-2">{{$nft->name}}</p>
                <p class="text-[#7d726f]">$ {{$nft->price}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="bg-[url('assets/bg-avatar.png')] bg-cover bg-center text-white p-10 sm:p-28">
    <p class="sm:w-[380px] mb-3 text-3xl font-semibold">In Here You Can Buy Your  Favorite NFT</p>
    <p class="text-sm mb-4 sm:w-[300px]">Lorem ipsum dolor sit amet amazing your purganizm, Lorem ipsum </p>
    <button class="py-3 px-7 rounded-full bg-[#5261df] text-sm">Explore Now</button>
</div>

<div class="py-16">
    <p class="text-2xl text-white font-semibold text-center mb-8">Search By Categories</p>
    <div class="flex flex-wrap xl:w-[1035px] w-full justify-center mx-auto">
        @foreach($categories as $category)
        <div class="bg-[#a5b6e2] w-max rounded-lg overflow-hidden m-2 xl:m-4">
            <img src="/storage/{{$category->thumb}}" alt="">
            <p class="p-3 font-medium text-lg">{{$category->name}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
