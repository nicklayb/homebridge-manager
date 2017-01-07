<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body>
    @include('layout.nav')
    <div class="container">
        @yield('content')
    </div>
    @include('layout.scripts')
</body>
</html>
