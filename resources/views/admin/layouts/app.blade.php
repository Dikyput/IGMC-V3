<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.header')

<body class="g-sidenav-show  bg-gray-200">
    @include('admin.layouts.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin.layouts.navbar')
        <div class="container-fluid py-4">
            @yield('content')
            @include('admin.layouts.footer')
        </div>
    </main>
    @include('admin.layouts.setting')
    @include('admin.layouts.js')
</body>

</html>
