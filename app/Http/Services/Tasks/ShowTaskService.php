<?php

namespace App\Http\Services\Tasks;

use App\Models\Task;

class ShowTaskService
{
    private Task $model ;

    public function __construct(Task $model) {
        $this->model = $model;
    }
    public function execute($id)
    {
        return $this->model::find($id);
    }
}