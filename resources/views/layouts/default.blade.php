
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
    @include('partials.menu')
    @include('partials.sidebar')
  </header>
  <main>
        @yield('content')
  </main>
  <footer>
    @include('partials.footer')
    @include('partials.scripts')
    @yield('extrascript')
    @yield('footer')
  </footer>
</body>

</html>
