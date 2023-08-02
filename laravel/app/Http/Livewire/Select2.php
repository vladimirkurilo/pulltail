<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2 extends Component
{
    public $selectedItems = [];
    public function render()
    {
        return view('livewire.select2', [
            'items' => ['5', '10', '15','20'],
        ]);
    }
}
