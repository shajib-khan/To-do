<?php

namespace App\Livewire;
use App\Models\Todo as ModelTodo;
use Livewire\Component;

class EditPost extends Component
{


    public function render()
    {
        $alltodos = ModelTodo::latest()->simplePaginate(3);
        return view('livewire.edit-post', compact('alltodos'));
    }
}
