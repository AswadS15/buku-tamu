<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  @livewireStyles
</head>
<body class="bg-emerald-700">
   
   @include('componen.nav')
   @include('componen.sidebar')
   
   @yield('isi')
   @livewireScripts
</body>
</html>


  