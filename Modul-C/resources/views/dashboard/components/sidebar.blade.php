<div class="text-white table-scroll md:block hidden w-[250px] p-7 bg-[#5261df] fixed top-0 h-full">
    <img src="/assets/logo.png" class="w-[40px] mb-8" alt="">
    <ul>
        <li class="mb-3"><a href="/dashboard/nft">Nft</a></li>
        <li class="mb-3"><a href="/dashboard/categories">Category</a></li>
        <li><a href="/dashboard/users">User</a></li>
    </ul>
</div>
<div class="md:hidden block">
    <img src="/assets/hamburger.png" class="absolute top-6 burger z-10 right-14" alt="">
    <div class="w-0 transition-all duration-300 h-screen sm:hidden flex text-white flex-col justify-center items-center overflow-hidden content-burger fixed bg-[#5261df] top-0 right-0">
        <p class="mb-3"><a href="/dashboard/nft">Nft</a></p>
        <p class="mb-3"><a href="/dashboard/categories">Category</a></p>
        <p><a href="/dashboard/users">User</a></p>
    </div>
</div>
<script>
    const contentBurger = document.querySelector('.content-burger')
        document.querySelector('.burger').addEventListener('click', () => {
            contentBurger.classList.toggle('w-[80vw]')
        })
</script>