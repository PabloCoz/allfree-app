<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;

class LoginModal extends Component
{
    public $open =  false;

    public function render()
    {
        return view('livewire.modals.login-modal');
    }
}
