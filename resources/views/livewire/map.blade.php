<div class="h-screen overflow-hidden p-3">
    <h2 class="font-bold dark:text-white">Map Location</h2>
    <div class="grid gap-4 grid-rows-2 md:grid-rows-2 xl:grid-cols-3">
        <div id="mapId" class="w-full h-full rounded-md xl:col-span-2"></div>
        <div class="xl:col-span-1 shadow-md rounded-md p-4">
            @if ($errors->any())
                <div class="p-4 mb-4 text-xs text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    @foreach ($errors->all() as $item)
                        <span class="font-medium">{{ $item }}</span> <br>
                    @endforeach
                </div>
            @endif
            @if (session()->has('message'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <span class="font-medium">{{ session('message') }}</span>
                </div>
            @endif
            <form wire:submit="store" class="max-w-full">
                <div class="mb-5">
                    <label for="lattitude"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lattitude</label>
                    <input wire:model="lattitude" type="lattitude" id="lattitude"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
                <div class="mb-5">
                    <label for="longitude"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude</label>
                    <input wire:model="longitude" type="longitude" id="longitude"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
                <div class="mb-5">
                    <label for="keterangan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                    <input wire:model="keterangan" type="keterangan" id="keterangan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
            </form>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        const defaultCord = [113.675207, -7.065177]
        document.addEventListener('livewire:initialized', () => {
            mapboxgl.accessToken = '{{ env('MAPBOX_TOKEN') }}';
            const mapId = new mapboxgl.Map({
                container: 'mapId', // container ID
                center: defaultCord, // starting position [lng, lat]. Note that lat must be set between -90 and 90
                zoom: 15, // starting zoom
            });
            const style = "standard"
            mapId.setStyle(`mapbox://styles/mapbox/standar/${style}`)

            mapId.addControl(new mapboxgl.NavigationControl())

            mapId.on('click', (e) => {
                const longitude = e.lngLat.lng
                const lattitude = e.lngLat.lat
                @this.longitude = longitude;
                @this.lattitude = lattitude;
            })

            let markers = [];

            function updateMarkersOnMap(petas) {
                displayMarkers(petas);
            }

            Livewire.on('updateMap', (petas) => {
                updateMarkersOnMap(petas);
            });

            function displayMarkers(petas) {
                markers.forEach(marker => marker.remove());
                markers = [];
                petas.forEach(peta => {
                    const marker = new mapboxgl.Marker()
                        .setLngLat([peta.longitude, peta.lattitude])
                        .setPopup(new mapboxgl.Popup({
                                offset: 25
                            })
                            .setHTML(`<h3>${peta.keterangan}</h3>`))
                        .addTo(mapId);
                    markers.push(marker);
                });
            }
            // Panggil fungsi pertama kali
            displayMarkers(@json($petas));

            mapId.on('load', () => {
                // Add a data source containing GeoJSON data
                mapId.addSource('dataPolygon', {
                    'type': 'geojson',
                    'data': {
                        'type': 'Feature',
                        'geometry': {
                            'type': 'Polygon',
                            // Coordinates outline the polygon
                            'coordinates': [
                                [
                                    [113.67418487892104, -7.062662000895344],
                                    [113.67454243342769, -7.0622902643332],
                                    [113.6765189954931, -7.063347690176826],
                                    [113.67795599260268, -7.0630681045446556],
                                    [113.67870666273404, -7.0632596691435627],
                                    [113.67868521501623, -7.063515088487435],
                                    [113.67881390132419, -7.063940787078963],
                                    [113.67859942414384, -7.064260060765477],
                                    [113.67870666273404, -7.064558049340917],
                                    [113.67817046978308, -7.065579722998024],
                                    [113.6782133652186, -7.065558438152152],
                                    [113.6789425876322, -7.066473685594758],
                                    [113.67414119603825, -7.0679512688613215],
                                    [113.67370397421354, -7.06638096381603],
                                    [113.6739538152558, -7.065306541499666],
                                    [113.67380807464804, -7.064542047178051],
                                    [113.6740370956037, -7.062558488446612],
                                    [113.67418487892104, -7.062662000895344]
                                ]
                            ]
                        }
                    }
                });

                // Add a new layer to visualize the polygon
                mapId.addLayer({
                    'id': 'maine',
                    'type': 'fill',
                    'source': 'dataPolygon', // Reference the data source
                    'layout': {},
                    'paint': {
                        'fill-color': '#0080ff', // Blue color fill
                        'fill-opacity': 0.5
                    }
                });

                // Add a black outline around the polygon
                mapId.addLayer({
                    'id': 'outline',
                    'type': 'line',
                    'source': 'dataPolygon',
                    'layout': {},
                    'paint': {
                        'line-color': '#000',
                        'line-width': 3
                    }
                });
            })
        })
    </script>
@endpush
