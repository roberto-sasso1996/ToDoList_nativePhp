<div class="col-md-6">
    <div class="card shadow-lg rounded-4">
        <div class="card-header d-flex justify-content-center">
            <h2>Elenco dei task</h2>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Check</th>
                        <th>Task</th>
                        <th>Data di scadenza</th>
                        <th>Priorità</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody >
                    
                    @forelse ($todos as $todo)
                        <tr>
                            @if ($todo->status == 'open')
                                <td><input type="checkbox" id="markAsDone" wire:change="markAsDone({{ $todo->id }})"></td>
                            @else
                                <td> 
                                    
                                </td>
                            @endif
                            <td style="{{($todo->status == 'done') ? 'text-decoration: line-through' : ''}}">{{ $todo->task }}</td>
                            <td style="{{($todo->status == 'done') ? 'text-decoration: line-through' : ''}}">{{ $todo->due_date }}</td>
                            <td style="{{($todo->status == 'done') ? 'text-decoration: line-through' : ''}}">{{ $todo->priority }}</td>
                            <td>
                                @if ($todo->status == 'done')                
                                    <a  class="btn btn-color-red rounded-5 shadow fw-bold " wire:click="deleteTodo({{ $todo->id }})">Elimina</a>
                                @elseif(!$todo->status == 'done')
                                    <td>

                                    </td>
                                @endif

                                {{-- @if ($selectedTodo && $selectedTodo->id == $todo->id)
                                    <button class="btn btn-primary" wire:click="updateTodo()">Aggiorna</button>
                                @endif --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Nessun task</td>
                        </tr>
                    @endforelse
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
