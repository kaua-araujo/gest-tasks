<?php

namespace App\Livewire;

use App\Http\Services\Tasks\DestroyTaskService;
use Livewire\Component;

class DestroyTask extends Component
{
    public $id;
    public function render(DestroyTaskService $destroyTaskService)
    {
        $destroyTaskService->execute($this->id);
        return route('home');
    }
}
