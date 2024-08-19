<?php

namespace App\Http\Services\Tasks;

use App\Models\Task;

class CreateTaskService
{
    private Task $model ;

    public function __construct(Task $model) {
        $this->model = $model;
    }
    public function execute()
    {
        dd('opa');
    }
}