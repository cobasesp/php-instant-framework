<!-- File: /app/Views/master.php -->

<html>
  <head>
    <meta charset="UTF-8">
    <title>@yield('title') - example</title>

    {{-- Insert here global CSS --}}

    {{-- Custom CSS for each template --}}
    @yield('custom_css')

  </head>
  <body>
    @yield('content')

    {{-- Inert global JS here --}}

    {{-- Custom JS for each template --}}
    @yield('custom_js')
  </body>
</html>