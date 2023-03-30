<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <style>
        a{
            text-decoration: none;
        }
    </style>
    <div class="page">
        <div class="header">
            @include('includes.header')
        </div>
        <div class="container">
            @yield('content')
        </div>
        <div class="footer">
            @include('includes.footer')
        </div>
    </div>
    <script src="{{ asset('js/public.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>