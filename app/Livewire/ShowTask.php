<?php

namespace App\Livewire;

use App\Http\Services\Categories\IndexCategorieService;
use App\Http\Services\Tasks\ShowTaskService;
use Livewire\Component;

class ShowTask extends Component
{
    public $id;
    public function render(ShowTaskService $showTaskService, IndexCategorieService $indexCategorieService)
    {
        $task = $showTaskService->execute($this->id);
        $categories = $indexCategorieService->execute();
        return view('livewire.show-task',[
            'task' => $task,
            'categories' => $categories,
        ]);
    }
}
