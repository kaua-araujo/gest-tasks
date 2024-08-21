<?php

namespace App\Http\Services\Tasks;

use App\Models\Task;

class DestroyTaskWithIdCategorieService
{
    private Task $model ;

    public function __construct(Task $model) {
        $this->model = $model;
    }
    public function execute($id)
    {
        $tasks = $this->model::where('categorie_id', $id)->get();
        foreach ($tasks as $task) {
            $task->delete($id);
        }

        return true;
    }
}
