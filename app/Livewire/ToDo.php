<?php

namespace App\Livewire;
use App\Models\Todo as ModelTodo;
use Livewire\Component;

class ToDo extends Component
{
    public $todo_add;
    public function addtodo()
    {
        $this->validate([
            "todo_add"=> "required"
        ]);
        ModelTodo::create([
            'todo'=> $this->todo_add

        ]);
        $this->todo_add="";
    }


    public function render()
    {
        $alltodos = ModelTodo::latest()->simplePaginate(3);
        return view('livewire.to-do', compact('alltodos'));
    }
}
