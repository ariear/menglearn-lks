window.addEventListener('scroll', () => {
    document.querySelector('header').classList.toggle('bg-[#5bc0f840]', window.scrollY > 0)
})

let menu = document.querySelector('.menu')
document.querySelector('.hamburger').addEventListener('click', () => {
    menu.classList.toggle('w-[80vw]')
})