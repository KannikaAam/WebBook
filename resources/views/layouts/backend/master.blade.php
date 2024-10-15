<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>

  @include('layouts.backend.css')

  @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('layouts.backend.nav')
  @include('layouts.backend.menu')

  @yield('content')

  @include('layouts.backend.footer')

</div>
<!-- ./wrapper -->

  @include('layouts.backend.js')

  @livewireScripts

</body>
</html>
