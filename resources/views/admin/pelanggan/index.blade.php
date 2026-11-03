<!--
=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================
* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)
* Designed and coded by https://themesberg.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.
-->
<!DOCTYPE html>
<html lang="en">

<!-- ========================================================= -->
<!-- START: HEAD (meta tags, favicon, CSS)                      -->
<!-- ========================================================= -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Volt - Free Bootstrap 5 Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets-admin/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets-admin/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets-admin/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- START CSS -->
   @include('layouts.admin.css')
    <!-- END CSS -->
</head>
<!-- ========================================================= -->
<!-- END: HEAD                                                  -->
<!-- ========================================================= -->

<body>

    <!-- ========================================================= -->
    <!-- START: TOP NAVBAR (mobile only)                            -->
    <!-- Shown on small screens (d-lg-none) as a fixed top bar     -->
    <!-- with brand logo + hamburger toggle for the sidebar.       -->
    <!-- ========================================================= -->
    @include('layouts.admin.navbarmobile')
    <!-- ========================================================= -->
    <!-- END: TOP NAVBAR (mobile only)                              -->
    <!-- ========================================================= -->

    <!-- ========================================================= -->
    <!-- START: SIDEBAR NAVIGATION                                  -->
    <!-- Left-hand side menu with logo, menu items (Dashboard,     -->
    <!-- Pelanggan, Documentation, Upgrade button) and user card.   -->
    <!-- Collapses on mobile via #sidebarMenu.                     -->
    <!-- ========================================================= -->
    
    <!-- ========================================================= -->
    <!-- END: SIDEBAR NAVIGATION                                    -->
    <!-- ========================================================= -->
    @include('layouts.admin.sidebar')

    <!-- ========================================================= -->
    <!-- START: MAIN CONTENT WRAPPER                                -->
    <!-- ========================================================= -->
    <main class="content">

        <!-- ========================================================= -->
        <!-- START: TOP NAVBAR (desktop)                                -->
        <!-- Search bar, notification bell dropdown, user profile menu. -->
        <!-- ========================================================= -->
        @include('layouts.admin.navbardesktop')
        <!-- ========================================================= -->
        <!-- END: TOP NAVBAR (desktop)                                  -->
        <!-- ========================================================= -->


        <!-- ========================================================= -->
        <!-- START: PAGE HEADER (breadcrumb + title + action button)   -->
        <!-- ========================================================= -->
        @include('layouts.admin.header')
        <!-- ========================================================= -->
        <!-- END: PAGE HEADER                                           -->
        <!-- ========================================================= -->
        @yield('content')
        
        <!-- ========================================================= -->
        <!-- START: DATA TABLE CARD (Pelanggan list)                    -->
        <!-- ========================================================= -->
        @include('layouts.admin.tablecard')
        <!-- ========================================================= -->
        <!-- END: DATA TABLE CARD                                       -->
        <!-- ========================================================= -->


        <!-- ========================================================= -->
        <!-- START: FOOTER                                              -->
        <!-- Copyright + quick links                                    -->
        <!-- ========================================================= -->
        @include('layouts.admin.footer')
        <!-- ========================================================= -->
        <!-- END: FOOTER                                                -->
        <!-- ========================================================= -->

    </main>
    <!-- ========================================================= -->
    <!-- END: MAIN CONTENT WRAPPER                                  -->
    <!-- ========================================================= -->


    <!-- ========================================================= -->
    <!-- START: SCRIPTS (core JS libraries)                         -->
    <!-- ========================================================= -->
    @include('layouts.admin.js')
    <!-- ========================================================= -->
    <!-- END: SCRIPTS                                               -->
    <!-- ========================================================= -->
</body>

</html>