<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function homeRessource()
    {
        return [
            'message' =>'it working'
        ];

    }

    public function render()
    {
        return view('livewire.home');
    }
}
