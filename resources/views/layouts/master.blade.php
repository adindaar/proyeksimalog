<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('layouts.navbar1')
    @include('layouts.sidebar')
    <div class="composer">
        @yield('konten')
    </div>

    @include('layouts.footer')
</body>
</html>