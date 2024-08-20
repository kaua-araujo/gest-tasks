<?php

namespace App\Http\Services\Tasks;

use App\Models\Task;
use ErrorException;
use GuzzleHttp\Promise\Create;

class CreateTaskService
{
    private Task $model ;

    public function __construct(Task $model) {
        $this->model = $model;
    }
    public function execute($data)
    {
        if ($data['categorie_id'] === "Selecione a categoria" or $data['categorie_id'] === "") {
            throw new ErrorException("Selecione uma categoria!");
        }
        Task::Create([
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => 'progress',
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
            'categorie_id' => $data['categorie_id'],
        ]);
        return redirect()->route('home');
       
    }
}