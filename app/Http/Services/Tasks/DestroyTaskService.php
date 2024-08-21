<?php

namespace App\Http\Services\Tasks;

use App\Models\Task;

class DestroyTaskService
{
    private Task $model ;

    public function __construct(Task $model) {
        $this->model = $model;
    }
    public function execute($id)
    {
        $task = $this->model::find($id);

        if (!$task) {
            return null;
        }

        return $task->delete($id);
    }
}
