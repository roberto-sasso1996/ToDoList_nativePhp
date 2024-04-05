<?php

namespace App\Livewire;

use App\Models\ToDo;
use Livewire\Component;

class ToDoCreate extends Component
{
    public $task = '';
    public $due_date = '';
    public $priority = '';

    protected $listeners = ['todosUpdated'];

    public function addToDo()
    {
        if ($this->task != '') {
            $todo = new ToDo();
            $todo->task = $this->task;
            $todo->due_date = $this->due_date;
            $todo->priority = $this->priority;
            $todo->save();
            $this->task = '';
            $this->due_date = '';
            $this->priority = '';

            $this->dispatch('todosUpdated'); // Emetti l'evento 'todosUpdated'
        }
    }

    public function render()
    {
        return view('livewire.to-do-create');
    }
}

