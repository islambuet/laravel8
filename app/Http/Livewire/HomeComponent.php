<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public $message = 'Hello World!';
    public function render()
    {
        return view('livewire.home-component')->layout('layouts/mytheme');
        //return view('livewire.home-component');
    }
}
