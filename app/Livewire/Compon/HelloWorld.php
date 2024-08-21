<?php

namespace App\Livewire\Compon;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Jelly';
    public $loud = false;
    public $greeting = ['Hello'];

    public function resetName($name = 'Chico')
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.compon.hello-world');
    }
}
