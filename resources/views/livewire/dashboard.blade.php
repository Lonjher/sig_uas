<div>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased relative">
        @if (session()->has('message'))
            <div class="absolute top-0 z-20 right-3 p-4 mb-4 w-1/2 text-sm shadow-md text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <span class="font-medium">{{ session('message') }}</span>
            </div>
        @endif
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-3">
                <div class="flex flex-col md:flex-row items-center gap-4 space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <img src="{{ asset('assets/svg/gps.png') }}" alt="gps_logo">
                    <h1 class="text-xl font-bold text-blue-600 text-center">Data Peta</h1>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-4 py-4">No.</th>
                                <th class="px-4 py-4">Keterangan</th>
                                <th class="px-4 py-3">Longitude</th>
                                <th class="px-4 py-3">Latitude</th>
                                <th class="px-4 py-3">Created At</th>
                                <th class="px-4 py-3"><span class="sr-only">Actions</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($maps as $key => $map)
                                <tr class="border-b dark:border-gray-700">
                                    <th class="px-4 py-3 font-medium text-gray-900 dark:text-white">
                                        {{ $key + 1 }}
                                    </th>
                                    <th class="px-4 py-3 font-medium text-gray-900 dark:text-white">
                                        {{ $map->keterangan }}
                                    </th>
                                    <td class="px-4 py-3">{{ $map->longitude }}</td>
                                    <td class="px-4 py-3">{{ $map->lattitude }}</td>
                                    <td class="px-4 py-3">{{ $map->created_at->diffForHumans() }}</td>
                                    <td class="px-4 py-3 flex justify-end">
                                        <div class="relative inline-block">
                                            <button data-dropdown-id="dropdown-{{ $map->id }}"
                                                class="dropdown-button inline-flex items-center text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700 p-1.5 text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="dropdown-{{ $map->id }}"
                                                class="hidden absolute right-0 mt-2 z-20 w-44 bg-white rounded-md divide-y divide-gray-100 dark:bg-gray-700 dark:divide-gray-600 shadow-xl">
                                                <ul class="py-1 text-sm hover:bg-red-500 transition duration-700 ease-in-out hover:scale-105 rounded-md"
                                                    aria-labelledby="dropdownButton">
                                                    <li>
                                                        <button wire:click='destroy({{ $map->id }})' type="button"
                                                            class="flex w-full items-center py-2 px-4 rounded-md transition duration-700 ease-in-out text-red-500 hover:text-white">
                                                            <svg class="w-4 h-4 mr-2" viewbox="0 0 14 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    fill="currentColor"
                                                                    d="M6.09922 0.300781C5.93212 0.30087 5.76835 0.347476 5.62625 0.435378C5.48414 0.523281 5.36931 0.649009 5.29462 0.798481L4.64302 2.10078H1.59922C1.36052 2.10078 1.13161 2.1956 0.962823 2.36439C0.79404 2.53317 0.699219 2.76209 0.699219 3.00078C0.699219 3.23948 0.79404 3.46839 0.962823 3.63718C1.13161 3.80596 1.36052 3.90078 1.59922 3.90078V12.9008C1.59922 13.3782 1.78886 13.836 2.12643 14.1736C2.46399 14.5111 2.92183 14.7008 3.39922 14.7008H10.5992C11.0766 14.7008 11.5344 14.5111 11.872 14.1736C12.2096 13.836 12.3992 13.3782 12.3992 12.9008V3.90078C12.6379 3.90078 12.8668 3.80596 13.0356 3.63718C13.2044 3.46839 13.2992 3.23948 13.2992 3.00078C13.2992 2.76209 13.2044 2.53317 13.0356 2.36439C12.8668 2.1956 12.6379 2.10078 12.3992 2.10078H9.35542L8.70382 0.798481C8.62913 0.649009 8.5143 0.523281 8.37219 0.435378C8.23009 0.347476 8.06631 0.30087 7.89922 0.300781H6.09922ZM4.29922 5.70078C4.29922 5.46209 4.39404 5.23317 4.56282 5.06439C4.73161 4.8956 4.96052 4.80078 5.19922 4.80078C5.43791 4.80078 5.66683 4.8956 5.83561 5.06439C6.0044 5.23317 6.09922 5.46209 6.09922 5.70078V11.1008C6.09922 11.3395 6.0044 11.5684 5.83561 11.7372C5.66683 11.906 5.43791 12.0008 5.19922 12.0008C4.96052 12.0008 4.73161 11.906 4.56282 11.7372C4.39404 11.5684 4.29922 11.3395 4.29922 11.1008V5.70078ZM8.79922 4.80078C8.56052 4.80078 8.33161 4.8956 8.16282 5.06439C7.99404 5.23317 7.89922 5.46209 7.89922 5.70078V11.1008C7.89922 11.3395 7.99404 11.5684 8.16282 11.7372C8.33161 11.906 8.56052 12.0008 8.79922 12.0008C9.03791 12.0008 9.26683 11.906 9.43561 11.7372C9.6044 11.5684 9.69922 11.3395 9.69922 11.1008V5.70078C9.69922 5.46209 9.6044 5.23317 9.43561 5.06439C9.26683 4.8956 9.03791 4.80078 8.79922 4.80078Z" />
                                                            </svg>
                                                            Delete
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const dropdownButtons = document.querySelectorAll(".dropdown-button");

            dropdownButtons.forEach(button => {
                button.addEventListener("click", (event) => {
                    const dropdownId = button.getAttribute("data-dropdown-id");
                    const dropdown = document.getElementById(dropdownId);

                    if (dropdown) {
                        dropdown.classList.toggle("hidden");
                    }
                });
            });

            document.addEventListener("click", (event) => {
                dropdownButtons.forEach(button => {
                    const dropdownId = button.getAttribute("data-dropdown-id");
                    const dropdown = document.getElementById(dropdownId);

                    if (dropdown && !dropdown.contains(event.target) && !button.contains(event
                            .target)) {
                        dropdown.classList.add("hidden");
                    }
                });
            });
        });
    </script>
@endpush
