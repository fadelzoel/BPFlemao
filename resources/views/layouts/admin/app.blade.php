<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Volt Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.admin.css')
</head>
<body>
    <!-- Mobile navbar -->
    @include('layouts.admin.navbarmobile')

    <!-- Sidebar -->
    @include('layouts.admin.sidebar')

    <main class="content">
        <!-- Desktop navbar -->
        @include('layouts.admin.navbardesktop')

        <!-- Page content -->
        @yield('content')

        <!-- Footer -->
        @include('layouts.admin.footer')
    </main>

    <!-- JS -->
    @include('layouts.admin.js')
</body>
</html>