<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platform Kreatif Untuk Undangan Digital - Hadir</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/main.css') }}">
    <script src="https://kit.fontawesome.com/0a267e6f70.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
</head>
<body class="poppins">
    @include('component.navbar')

    <!-- CONTENT -->
    <main class="w-full pt-12">
        @yield('content')
    </main>
    <!-- END CONTENT -->

    @include('component.footer')
</body>
</html>