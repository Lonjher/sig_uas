<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App GIS | {{ isset($title) ? $title : env('APP_NAME') }}</title>
    @stack('style')
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    {{ $slot }}
    @livewireScripts
    @stack('scripts')
    <script>
        document.getElementById('profileMenu').addEventListener('click', () => {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
        });
    </script>
</body>

</html>
