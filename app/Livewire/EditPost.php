<?php

namespace App\Livewire;
use App\Models\Todo as ModelTodo;
use Livewire\Component;

class EditPost extends Component
{
    public $ModelTodo;
    public $todo;
    
    public function update()
    {
        $ModelTodo = ModelTodo::find($this->id);

        $ModelTodo->update([
            'todo' => $this->todo,

        ]);

        session()->flash('message', 'Post updated successfully!');
    }

    public function render()
    {
        $alltodos = ModelTodo::latest()->simplePaginate(3);
        return view('livewire.edit-post', compact('alltodos'));
    }
}
