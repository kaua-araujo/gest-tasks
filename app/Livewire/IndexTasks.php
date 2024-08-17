<?php

namespace App\Livewire;

use App\Models\Categorie;
use App\Models\Task;
use Livewire\Component;

class IndexTasks extends Component
{

    public $title;

    protected $rules = [
        'title' => 'required'
    ];

    public function render()
    {
        $tasks = Task::with('categorie')->get();
        return view('livewire.index-tasks',[
            'tasks' => $tasks,
        ]);
    }
}
