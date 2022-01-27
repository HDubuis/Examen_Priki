<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowChangelogs extends Component
{
    public $practice;

    public function render()
    {
        return view('livewire.show-changelogs');
    }
}
