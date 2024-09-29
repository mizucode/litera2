<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])`
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Dashboard</title>
</head>

<body class="">
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <x-navbar-dashboard></x-navbar-dashboard>

        <!-- Sidebar -->

        <x-aside-dashboard></x-aside-dashboard>

        <main class="p-4 md:ml-64 h-auto pt-10">
            {{ $slot }}
        </main>

        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>

</html>
