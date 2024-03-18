<div ="d-flex">
  <h3>This is ToDo</h3>
   <button class="btn btn-primary" wire:click="todoadd">Add Todo</button>
   @forelse ($alltodos as $alltodo )
            <td>
                <ul>
                    <li>
                        <h4>{{ $alltodo->todo }}</h4>
                        <p>Create {{ $alltodo->created_at }}</p>
                        <p>Update {{ $alltodo->updated_at }}</p>
                    </li>
                </ul>
            </td>

   @empty
            <p>there is no todo</p>
                @endforelse
</div>
