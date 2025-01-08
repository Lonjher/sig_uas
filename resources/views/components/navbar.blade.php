<nav class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% shadow-md py-2">
    <div class="container mx-auto px-6 flex justify-evenly items-center">
        <div class="flex justify-center items-center">
            <img src="{{ asset("assets/logo/ua.png") }}" alt="ua" width="50">
            <span class="flex flex-col">
                <span class="text-lg ml-2 font-sans text-gray-50">Universitas Annuqayah</span>
            </span>
        </div>
        <ul class="flex space-x-6 text-gray-50">
            <li><a href="/" class="hover:text-blue-800 font-medium transition duration-300">Home</a></li>
            <li><a href="/dashboard" class="hover:text-blue-800 font-medium transition duration-300">Dashboard</a></li>
            <li><a href="/about" class="hover:text-blue-800 font-medium transition duration-300">About</a></li>
        </ul>
        <div class="relative">
            <button id="profileMenu" class="flex items-center space-x-2 focus:outline-none">
                <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 z-10 bg-white rounded-md shadow-lg py-2">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>
</nav>
