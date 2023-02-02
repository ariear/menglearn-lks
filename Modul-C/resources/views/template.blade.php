<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOFAN</title>
    <script src="/scripts/3.2.js"></script>
    <script>
        tailwind.config = {
          theme: {
            fontFamily: {
                'pupi': ['"Poppins"', 'sans-serif']
            }
          }
        }
      </script>
</head>
<body class="bg-[#0a193a] font-pupi">
    @include('components.navbar')
    <div>
        @yield('content')
    </div>
    @include('components.footer')
    <script>
        window.addEventListener('scroll', () => {
            document.querySelector('nav').classList.toggle('bg-[#01102d]', window.scrollY > 0)
            document.querySelector('nav').classList.toggle('py-3', window.scrollY > 0)
        })

        const contentBurger = document.querySelector('.content-burger')
        document.querySelector('.burger').addEventListener('click', () => {
            contentBurger.classList.toggle('w-[80vw]')
        })

        const sapa = document.querySelector('.sapa')
        const menu_auth = document.querySelector('.menu-auth')
        sapa.addEventListener('click', () => {
            menu_auth.classList.toggle('hidden')
        })
    </script>
</body>
</html>
