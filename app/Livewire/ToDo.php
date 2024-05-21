<?php

namespace App\Livewire;
use App\Models\Todo as ModelTodo;
use Livewire\Component;

class ToDo extends Component
{
    public $todoAdd = '';
    public function save()
    {

    }
    public function addtodo()
    {
        $this->validate([
            "todoAdd"=> "required"
        ]);
        ModelTodo::create([
            'todo'=> $this->todoAdd

        ]);
        $this->reset();
        session()->flash('newTodoAdded', 'New Todo successfully Added.');
    }
    public function DeleteTodo($id)
    {
        ModelTodo::find($id)->delete();
        session()->flash('delete', 'Successfully Todo Deleted');
    }


    public function render()
    {
        $alltodos = ModelTodo::latest()->simplePaginate(3);
        return view('livewire.to-do', compact('alltodos'));
    }
}
// public function deleteComment($id)

