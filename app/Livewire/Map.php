<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Map as ModelMaps;

class Map extends Component
{
    public $longitude, $lattitude, $keterangan;

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
    }

    public function render()
    {
        return view('livewire.map');
    }
}
