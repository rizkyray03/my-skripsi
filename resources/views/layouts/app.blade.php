<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4 shadow-sm">
            @include('includes.header')
            @include('includes.breadcrumbs')
        </header>
        <div class="body flex-grow-1">
            <div class="container-fluid mb-3">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </div>
</body>

</html>
