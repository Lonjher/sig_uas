<x-app-layout>
    <div>
        @push('style')
            <style>
                @keyframes float {

                    0%,
                    100% {
                        transform: translateY(0);
                    }

                    50% {
                        transform: translateY(-20px);
                    }
                }

                .floating {
                    animation: float 3s ease-in-out infinite;
                }
            </style>
        @endpush
        <div class="bg-gray-100">
            <header class="relative h-screen">
                <img src="{{ asset('assets/img/hero.jpg') }}" alt="Hero Background"
                    class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex flex-col justify-center items-center text-white">
                    <h1 class="text-5xl font-bold mb-4">Welcome to GIS UAS Aplication</h1>
                    <span class="text-md">Diajukan sebagai tugas UAS Mata Kuliah Implementasi Sistem Informasi
                        Geografis</span>
                    <span class="text-md mb-6">Dosen: <a href="https://github.com/rofiuddin15" class="underline"
                            target="_blank">Bpk. Rafi'udin, M.Kom.</a></span>
                    <a href="/dashboard" class="bg-blue-600 py-3 px-6 rounded-lg text-lg shadow-lg hover:bg-blue-700">Get
                        Started</a>
                </div>
            </header>

            <main class="container mx-auto px-4 mt-10">
                <div class="flex justify-center items-center container mb-5">
                    <img src="{{ asset('assets/logo/ua-logo.png') }}" alt="UA Logo" class="floating w-56">
                </div>
                <div class="flex flex-col items-center">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Universitas Annuqayah</h2>
                    <p class="text-gray-600 text-center max-w-xl">
                        Our GIS application is designed to provide advanced mapping and geospatial analysis capabilities.
                        Get
                        started now to unlock insights and explore the world like never before.
                    </p>
                    <div class="mt-6">
                        <a href="https://ua.ac.id/"
                            class="bg-blue-600 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-700">More...</a>
                    </div>
                </div>

                <section class="mt-12">
                    <h3 class="text-center text-2xl font-semibold text-gray-800 mb-6">Teknologi yang Digunakan</h3>
                    <div class="grid justify-items-stretch">
                        <div
                            class="grid grid-cols-2 md:grid-cols-3 gap-4 text-center grid-flow-row-dense w-1/2 justify-self-center">
                            <div
                                class="col-span-2 p-4 bg-white shadow rounded-lg flex flex-col justify-center items-center hover:-translate-y-1.5 transition-all ease-in-out delay-150 hover:scale-105 hover:text-red-700 duration-300 hover:shadow-xl">
                                <img src="{{ asset('assets/logo/laravel.png') }}" width="100" alt="Laravel"
                                    class="mx-auto mb-2">
                                <span class="text-lg font-medium">Laravel</span>
                            </div>
                            <div
                                class="col-span-1 p-4 bg-white shadow rounded-lg flex flex-col justify-center items-center hover:-translate-y-1.5 transition-all ease-in-out delay-150 hover:scale-105 hover:text-blue-500 duration-300 hover:shadow-xl">
                                <img src="{{ asset('assets/logo/tailwind.png') }}" width="100" alt="Tailwind CSS"
                                    class="mx-auto mb-2">
                                <span class="text-lg font-medium">Tailwind CSS</span>
                            </div>
                        </div>
                        <div
                            class="mt-4 grid grid-cols-2 md:grid-cols-6 gap-4 text-center grid-flow-row-dense w-1/2 self-center justify-self-center">
                            <div
                                class="col-span-2 p-4 bg-white shadow rounded-lg flex flex-col justify-center items-center hover:-translate-y-1.5 transition-all ease-in-out delay-150 hover:scale-105 hover:text-blue-700 duration-300 hover:shadow-xl">
                                <img src="{{ asset('assets/logo/mapbox.jpg') }}" width="100" alt="Mapbox"
                                    class="mx-auto mb-2">
                                <span class="text-lg font-medium ">Mapbox</span>
                            </div>
                            <div
                                class="col-span-4 p-4 bg-white shadow rounded-lg flex flex-col justify-center items-center hover:-translate-y-1.5 transition-all ease-in-out delay-150 hover:scale-105 hover:text-green-700 duration-300 hover:shadow-xl">
                                <img src="{{ asset('assets/logo/openstreetmap.jpg') }}" width="100" alt="OpenStreetMap"
                                    class="mx-auto mb-2">
                                <span class="text-lg font-medium ">OpenStreetMap</span>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="bg-gray-800 text-white py-4 mt-10">
                <div class="container mx-auto text-center">
                    <p>&copy; 2025 GIS Application. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</x-app-layout>
