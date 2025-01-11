<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Map;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public function destroy($id)
    {
        //destroy
        Map::destroy($id);

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->back();
    }
    public function render()
    {
        $maps = Map::latest()->paginate(5);
        return view('livewire.dashboard', [
            'maps' => $maps
        ]);
    }
}
