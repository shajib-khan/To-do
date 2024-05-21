<?php

namespace App\Livewire;
use App\Models\Todo as ModelTodo;
use Livewire\Component;

class EditPost extends Component
{
    public $todo;
    public $id;


    public function mount($id){
        $model=ModelTodo::find($id);
        $this->todo = $model->todo;
    }


    public function EditTodo()
    {
        $model = ModelTodo::find($this->id);

        $model->update([
            'todo' => $this->todo,
        ]);
        $this->reset();
        session()->flash('editTodo', 'Todo  successfully updated!');
    }

    public function render()
    {
        $alltodos = ModelTodo::latest()->simplePaginate(3);
        return view('livewire.edit-post', compact('alltodos'));
    }
}
