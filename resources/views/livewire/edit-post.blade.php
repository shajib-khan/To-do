<div>
    <form wire:submit="EditTodo">
        <input type="text"wire:model="edit_add" placeholder="Edit your to do">
        <button class="btn btn-primary">Edit Todo</button>
       </form>
      
            @forelse ($alltodos as $alltodo )
          <ul><li>{{ $alltodo->todo }}</li></ul>
          @empty
            <p>there is no todo</p>
                @endforelse
        </tbody>
      </table>
</div>
