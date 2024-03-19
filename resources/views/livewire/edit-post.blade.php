<div>
    <form wire:submit="EditTodo">
        <input type="text"wire:model="edit_add" placeholder="Edit your to do">
        <button class="btn btn-primary">Edit Todo</button>
       </form>
       <table class="table">
        <thead>
          <tr>
            <th scope="col"id</th>
            <th scope="col">Todo</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($alltodos as $alltodo )
          <tr>

            <td>
                <ul>
                    
                    <li>{{ $alltodo->todo }}</li>
                </ul>
            </td>

          </tr>

          @empty
            <p>there is no todo</p>
                @endforelse

        </tbody>
      </table>
</div>
