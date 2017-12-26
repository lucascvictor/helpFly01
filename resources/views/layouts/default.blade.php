
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

<body class="loaded">
    @include('partials.menu')
    @include('partials.sidebar')


    <div style="margin-top: 5%; margin-left: 20%;">
      @yield('content')
    </div>
    @include('partials.footer')
    @yield('extrascript')

</body>

</html>
