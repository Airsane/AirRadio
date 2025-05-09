<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Radio;

class RadioSearch extends Component
{
    public $search = '';

    public function render()
    {
        $radios = Radio::where('name', 'like', '%' . $this->search . '%')
            ->orderBy('favorite', 'desc')
            ->orderBy('name')
            ->get();

        return view('livewire.radio-search', [
            'radios' => $radios
        ]);
    }

    public function toggleFavorite(Radio $radio)
    {
        $radio->toggleFavorite();
    }
}
