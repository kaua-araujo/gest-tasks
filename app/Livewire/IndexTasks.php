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
        $categories = Categorie::get();
        $tasks = Task::with('categorie')->get();
        return view('livewire.index-tasks',[
            'tasks' => $tasks,
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $this->validate();
        Categorie::create([
            'title' => $this->title,
        ]);

        $this->title = '';
    }
}
