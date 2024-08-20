<?php

namespace App\Livewire\Compon;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'jelly';
    public $loud = false;
    public $greeting = ['Hello'];

    public function render()
    {
        return view('livewire.compon.hello-world');
    }
}
