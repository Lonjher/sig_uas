<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="The modern, accessible and dark theme ready HTML dashboard. Full of custom, reusable components to speed up the development of admin panels.">
    <meta name="author" content="abdulbasit-dev">
    <title>Dashboard | Gis UAS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    @vite(["resources/css/app.css","resources/js/app.js"])
    {{-- favicon --}}
    <link rel="icon" sizes="180x180" href="{{ asset('assets/img/windmill.png') }}">
    @livewireStyles
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.9.2/mapbox-gl.css" rel="stylesheet">
</head>
<body>
<div class="flex h-screen bg-gray-50 dark:bg-gray-900">
    <!-- Desktop sidebar -->
    <x-sidebar/>

    <!-- Mobile sidebar -->
    {{-- @include('includes.mobile-sidebar') --}}

    <div class="flex flex-col flex-1 w-full">
        <x-header/>
        <main class="h-full overflow-y-auto">
            {{ $slot }}
        </main>
    </div>
</div>
<script src="https://api.mapbox.com/mapbox-gl-js/v3.9.2/mapbox-gl.js"></script>

@stack('scripts')
@livewireScripts
</body>
</html>
