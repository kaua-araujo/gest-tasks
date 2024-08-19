<?php

namespace App\Livewire;

use App\Http\Services\Tasks\IndexTaskService;
use Livewire\Component;

class HomeGest extends Component
{
    public function render(IndexTaskService $indexTaskService)
    {
        $tasks = $indexTaskService->execute();
        return view('livewire.home-gest',[
            'tasks' => $tasks,
        ]);
    }
}
