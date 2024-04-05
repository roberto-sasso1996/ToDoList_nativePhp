<div class="col-md-6">
    <div class="card shadow-lg rounded-4">
        <div class="card-header d-flex justify-content-center">
            <h2>Aggiungi un task</h2>
        </div>

        <div class="card-body">
            <input type="text" class="form-control" wire:model.live="task" placeholder="Task">
            <input type="date" class="form-control mt-2" wire:model.live="due_date" placeholder="Data di scadenza">
            <input type="number" class="form-control mt-2" wire:model.live="priority" placeholder="Priorità">

            <div class="d-flex  justify-content-center mt-3">
                <a class="btn btn-color-green rounded-5 shadow fw-bold" wire:click="addToDo">Aggiungi Task</a>
            </div>

        </div>
    </div>
</div>
