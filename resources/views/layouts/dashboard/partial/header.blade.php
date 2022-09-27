<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@yield('meta_author')">
    <meta name="description" content="@yield('meta_description')">

    <title>@yield('title') | @yield('app_name')</title>
        @yield('styles_permanent')
        @yield('styles')
  </head>