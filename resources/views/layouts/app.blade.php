<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bookezly</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50">

  {{-- Header --}}
  @include('layouts.header')

  {{-- Content --}}

    @yield('content')


    @yield('soluctions')



  {{-- Footer --}}
  @include('layouts.footer')

</body>
</html>
