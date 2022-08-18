<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InclusionCard extends Component
{
    public $inclusion;
    public function render()
    {
        return view('livewire.inclusion-card', [
            'inclusion' => $this->inclusion,
        ]);
    }
}
