<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FranchiseForm extends Component
{
    public $brand;

    public function render()
    {
        return view('livewire.franchise-form', [
            'brand' => $this->brand,
        ]);
    }
}
