<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    //public $count = 0;

    public function farder_add()
    {
        $this->emit('farder_add');
        //$this->count++;
    }

    public function farder_delete()
    {
        $this->emit('farder_delete');
       // $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
