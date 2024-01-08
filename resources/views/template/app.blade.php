<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/notiflix@3.2.6/dist/notiflix-3.2.6.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    @stack('auth-style')
    @stack('core-style')
</head>
<body>

    <div id="loading-overlay"></div>
  
    <div id="loading-popup">
      <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
      <p class="text-center" style="font-size: 12px">Loading...</p>
      <img src="{{ asset('img/logo.png') }}" width="180" alt="">
    </div>

    {{-- main --}}
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notiflix@3.2.6/dist/notiflix-aio-3.2.6.min.js"></script>
    <script src="{{ asset('js/loading.js') }}"></script>
    @include('template.notiflix')
    @stack('core-script')
</body>
</html>