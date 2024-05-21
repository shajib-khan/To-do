  <div>
  <h3>Add Your Todo</h3>
    @if(session()->has('newTodoAdded'))
    <div class="alert alert-success">
        {{ session()->get('newTodoAdded') }}
    </div>
    @endif
    @if(session()->has('delete'))
    <div class="alert alert-success">
        {{ session()->get('delete') }}
    </div>
    @endif

    @error('todo_add')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <form wire:submit.prevent="addtodo">
    <input type="text"wire:model.live="todoAdd" placeholder="Add your to do">
    <button class="btn btn-primary">Add Todo</button>
   </form>
   @forelse ($alltodos as $alltodo )
            <td>
                <ul>
                    <li>

                        <td><h4>{{ $alltodo->todo }}</h4></td>
                        <td><a class="btn btn-danger" wire:confirm="Are you sure you want to delete this post?"wire:click="DeleteTodo({{ $alltodo['id'] }})">Delete</a></td>
                        <td><a class="btn btn-danger" wire:navigate ="EditPost" href="{{ route('edit.post', ['id'=>$alltodo->id]) }}">edit</a></td>
                        
                    </td>
                    </li>
                </ul>
            </td>
     @empty
            <p class="text-red">There is no Todo</p>
                @endforelse
                {{ $alltodos->links() }}


</div>
