<?php

namespace App\Livewire;

use App\Models\ToDo;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Native\Laravel\Facades\Notification;
use Illuminate\Database\Console\Migrations\RefreshCommand;

class ToDoList extends Component{

        public $todos;
        public $selectedTodo;

        protected $listeners = ['todosUpdated'];

        public function mount()
        {
            $this->fetchTodos();
        }

        public function fetchTodos()
        {
            $this->todos = ToDo::all()->reverse();
        }

        public function todosUpdated()
        {
            // Aggiorna i dati quando l'evento 'todosUpdated' viene ricevuto
            $this->fetchTodos();
        }

        public function deleteTodo(ToDo $todo)
        {
            // $todo = ToDo::find($id);
            $todo->delete();
            $this->fetchTodos(); // Emetti l'evento 'todosUpdated'

            Notification::title('ToDoList')
            ->message('Complimenti per aver completato un Task')
            ->show();
        }

        public function selectTodo($id)
        {
            $this->selectedTodo = ToDo::find($id);
        }

        public function updateTodo()
        {
            $this->selectedTodo->save();
            $this->selectedTodo = null;
            $this->fetchTodos();
        }

        public function markAsDone(ToDo $todo){
            $todo->status = 'done';
            $todo->save();
            $this->fetchTodos();
        }

        public function render()
        {
            return view('livewire.to-do-list');
        }
}


