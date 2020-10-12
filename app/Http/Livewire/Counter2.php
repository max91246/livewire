<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter2 extends Component
{

    public $count = 0;

    protected $listeners = [
        'farder_add' => 'chilenen_add',
        'farder_delete' => 'chilenen_delete',
    ];

    public function chilenen_add()
    {
        $this->count++;
    }

    public function chilenen_delete()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter2');
    }
}
