<?php

namespace App\Livewire;

use App\Http\Services\Categories\CreateCategorieService;
use App\Http\Services\Categories\IndexCategorieService;
use App\Models\Task;
use Livewire\Component;

class IndexTasks extends Component
{

    public $title;

    protected $rules = [
        'title' => 'required'
    ];

    public function render(IndexCategorieService $service)
    {
        $categories = $service->execute();

        dd($categories);
        $tasks = Task::with('categorie')->get();
        return view('livewire.index-tasks',[
            'tasks' => $tasks,
            'categories' => $categories
        ]);
    }

    public function create(CreateCategorieService $service)
    {
        $service->execute();
    }
}
