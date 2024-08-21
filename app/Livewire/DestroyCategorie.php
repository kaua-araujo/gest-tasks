<?php

namespace App\Livewire;

use App\Http\Services\Categories\DestroyCategorieService;
use App\Http\Services\Tasks\DestroyTaskWithIdCategorieService;
use Livewire\Component;

class DestroyCategorie extends Component
{
    public $id;
    public function render(DestroyCategorieService $destroyCategorieService, DestroyTaskWithIdCategorieService $destroyTaskWithIdCategorieService)
    {
        $destroyTaskWithIdCategorieService->execute($this->id);
        $destroyCategorieService->execute($this->id);
        return route('home');
    }
}
