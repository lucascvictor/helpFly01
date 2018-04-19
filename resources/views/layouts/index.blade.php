
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    @include('partials.styles')

</head>

<body>
  <header>
    @include('partials.index.menu')
    @include('partials.index.sidebar')
  </header>
  <main style="height: 1500px;">
        @yield('content')
  </main>

@include('partials.modal')

  <footer>
    @include('partials.footer')
    @include('partials.scripts')
    @yield('extrascript')
    @yield('footer')
  </footer>
</body>

</html>
