<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $test =10;
    public function salut(){
        echo 'salut';
    }
    public function render()
    {
        return view('livewire.test');
    }
}
