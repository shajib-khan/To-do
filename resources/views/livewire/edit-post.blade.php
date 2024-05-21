<div>
    @if(session()->has('editTodo'))
    <div class="alert alert-success">
        {{ session()->get('editTodo') }}
    </div>
    @endif
    <form wire:submit="EditTodo">
        <input type="text"wire:model="todo" placeholder="Edit your to do">
        <button class="btn btn-primary">Edit Todo</button>
       </form>
</div>
