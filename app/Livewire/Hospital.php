<?php

namespace App\Livewire;

use Livewire\Component;

class Hospital extends Component
{

    public $name = 'Asiri Hospital';

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function anyDamnThing()
    {
        dd('Hello World');
    }

    public function render()
    {
        return view('livewire.hospital');
    }
}
