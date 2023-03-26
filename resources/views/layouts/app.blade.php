<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="nav">
        <header>
            @include('includes.header')
        </header>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            @include('includes.footer')
        </footer>
    </div>
    <script src="{{ asset('js/public.js') }}"></script>
</body>
</html>