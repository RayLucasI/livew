<?php

namespace App\Livewire\Compon;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';

    public function render(){
        return view('livewire.compon.create-post')->with([
            'author'=>Auth::user()->name,
        ]);
    }
}
