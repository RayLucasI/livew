<?php

namespace App\Livewire\Quick;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment(){
        $this->count++;    
    }

    public function decrement(){
        $this->count--;
    }

    /* Se puede omitir el render y livewire utilizará por omisión el del nombre del componente
    public function render()
    {
        return view('livewire.quick.counter');
    }
    */
}
