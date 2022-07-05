<!doctype html>
<html lang="{{ $site->short_locale }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">
    <title>{{$page->title ?? $site->name}}</title>
</head>
<body>

<div class="site-wrapper px-0">
    @yield('body')
</div>

<script src="{{ mix('dist/js/site.js') }}"></script>
</body>
</html>
