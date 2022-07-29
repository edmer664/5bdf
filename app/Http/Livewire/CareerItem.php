<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CareerItem extends Component
{
    public $career;

    public function render()
    {
        return view('livewire.career-item', [
            'career' => $this->career,
        ]);
    }
}
