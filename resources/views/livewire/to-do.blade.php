<div ="d-flex">
  <h3>This is ToDo</h3>
   <form wire:submit="addtodo">

    <input type="text"wire:model.live="todo_add" placeholder="Add your to do">
    @error('todo_add')
    <div class="alert alert-danger">{{ $message }}</div>

    @enderror
    <button class="btn btn-primary">Add Todo</button>
   </form>
   @forelse ($alltodos as $alltodo )
            <td>
                <ul>
                    <li>

                        <td><h4>{{ $alltodo->todo }}</h4></td>
                        <td><p>Create {{ $alltodo->created_at }}</p></td>
                        <td><p>Update {{ $alltodo->updated_at }}</p></td>
                        <td><a class="btn btn-danger" wire:navigate="deletetodo" href="#">Delete</a></td>
                    </li>
                </ul>
            </td>
   @empty
            <p>there is no todo</p>
                @endforelse
                {{ $alltodos->links() }}

</div>
