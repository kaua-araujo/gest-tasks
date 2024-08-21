<?php

namespace App\Http\Services\Tasks;

use App\Models\Task;

class UpdateTaskService
{
    private Task $model ;

    public function __construct(Task $model) {
        $this->model = $model;
    }
    public function execute($id, $data)
    {
        $task = $this->model::find($id);

        $task->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => $data['status'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
            'categorie_id' => $data['categorie_id'],
        ]);
    }
}
