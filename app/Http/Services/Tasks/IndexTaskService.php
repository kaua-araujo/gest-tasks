<?php

namespace App\Http\Services\Tasks;

use App\Models\Task;

class IndexTaskService
{
    private Task $model ;

    public function __construct(Task $model) {
        $this->model = $model;
    }
    public function execute()
    {
        return $this->model::with('categorie')->get();
    }
}