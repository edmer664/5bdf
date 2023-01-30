<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactDetails extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.contact-details');
    }
}
