<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Map as ModelMaps;

class Map extends Component
{
    public $longitude, $lattitude, $keterangan;
    public $petas = [];

    public function mount()
    {
        $this->petas = ModelMaps::all(); // Ambil semua data tempat dari database
    }

    public function store(){
        $rules = [
            'longitude' => 'required',
            'lattitude' => 'required',
            'keterangan' => 'required'
        ];

        $pesan_eror = [
            'longitude' => 'Klik peta untuk mendapatkan Longitude',
            'lattitude' => 'Klik peta untuk mendapatkan Lattitude',
            'keterangan' => "Harap isi bidang Keterangan"
        ];

        $validated = $this->validate($rules, $pesan_eror);
        ModelMaps::create($validated);
        session()->flash('message', 'Data berhasil disimpan!');
        return $this->redirect('map');
    }

    public function show(){
        $maps = ModelMaps::all();
        $this->petas = $maps;
    }

    public function updateMarkers()
    {
        $this->petas = ModelMaps::all()->map(function ($peta){
            $peta->longitude = (float) $peta->longitude;
            $peta->lattitude = (float) $peta->lattitude;
            return $peta;
        })->toJson();
        $this->dispatch('updateMap', $this->petas); // Emit event ke JavaScript
    }

    public function render()
    {
        // $maps = ModelMaps::all();
        // $geoJson = $maps->toJson( );
        // $this->petas = $geoJson;
        return view('livewire.map');
    }
}
