<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $fb;

    public function render()
    {
        return view('livewire.footer',['fb' => $this->fb]);
    }
}
