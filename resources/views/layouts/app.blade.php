<?php
  $colorDrawer = 'white';
  $colorToolbar = 'white';
  $colorText = 'black';
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background: #f6f6f6">
  <div id="app">
    <q-layout view="lHh Lpr fff">

      <q-page-container>
        @yield('content')
      </q-page-container>
    </q-layout>

  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/quasar@1.12.13/dist/quasar.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/quasar@1.13.1/dist/lang/pt-br.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/quasar@1.13.1/dist/icon-set/fontawesome-v5.umd.min.js"></script>
  <script>
    Quasar.lang.set(Quasar.lang.ptBr)
  </script>
  @yield('script')
</body>
</html>
