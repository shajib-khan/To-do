<?php

namespace App\Livewire;
use App\Models\Todo as modeltodo;
use Livewire\Component;

class ToDo extends Component
{
    public function todoadd()
    {
        modeltodo::create([
            'todo'=>'   This is new ToDo'
        ]);
    }


    public function render()
    {
        $alltodos = modeltodo::all();
        return view('livewire.to-do', compact('alltodos'));
    }
}
