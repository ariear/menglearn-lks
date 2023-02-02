<nav class=" transition-all duration-300 px-10 lg:px-16 py-5 flex items-center justify-between text-white fixed w-full">
    <img src="assets/logo.png" class="w-[40px]" alt="">
    <div class="sm:flex hidden items-center">
        <p><a href="/">Home</a></p>
        <p class="mx-7"><a href="/explore">Explore</a></p>
        <p><a href="/create">Create</a></p>
    </div>
    @auth
    <div class="relative hidden sm:block">
        <p class="sapa">Halo , {{auth()->user()->name}}</p>
        <div class="absolute hidden bg-[#5261df] p-3 rounded-lg -bottom-20 menu-auth">
            <p class="mb-2"><a href="/dashboard/nft">Dashboard</a></p>
            <p><form action="/logout" method="post">@csrf <button type="submit">Logout</button></form></p>
        </div>
    </div>
    @endauth
    @guest
    <button class="py-2 px-8 rounded-full bg-[#5261df] sm:block hidden"><a href="/login">Login</a></button>
    @endguest
    <img class="sm:hidden block z-10 burger" src="assets/hamburger.png" alt="">
    <div class="w-0 transition-all duration-300 h-screen sm:hidden flex flex-col justify-center items-center overflow-hidden content-burger fixed bg-[#5261df] top-0 right-0">
        <p class="mb-3"><a href="/">Home</a></p>
        <p class="mb-3"><a href="/explore">Explore</a></p>
        <p><a href="/create">Create</a></p>
        @auth
        <div class="relative">
            <div class="bg-[#5261df] p-3 rounded-lg -bottom-20">
                <p class="mb-2"><a href="/dashboard/nft">Dashboard</a></p>
                <p><form action="/logout" method="post">@csrf <button type="submit">Logout</button></form></p>
            </div>
        </div>
        @endauth
        @guest
        <button class="py-2 px-8 rounded-full bg-[#5261df]"><a href="/login">Login</a></button>
        @endguest
    </div>
</nav>
