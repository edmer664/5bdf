<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CareerItem extends Component
{
    public $career;
    public $border;

    public function render()
    {
        return view('livewire.career-item', [
            'career' => $this->career,
            'border' => $this->border,
        ]);
    }
}
