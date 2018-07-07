<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Blog 1')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="app">
        @include('layouts._header')
    
        <div class="container">
            @include('shared._messages')
            @yield('content')
        </div>
        @include('layouts._footer')
        
    </div>
    <script src="/js/app.js" ></script>
</body>
</html>