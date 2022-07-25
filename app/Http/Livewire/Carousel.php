<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Carousel extends Component
{
    public $carousels;

    public function render()
    {
        return view('livewire.carousel',[
            'carousels' => $this->carousels,
        ]);
    }
}
