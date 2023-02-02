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
    <div class="flex">
      @include('dashboard.components.sidebar')
      <div class="md:pl-[250px]">
          @yield('content')
      </div>
    </div>
</body>
</html>
