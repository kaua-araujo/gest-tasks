<?php

namespace App\Livewire;

use App\Http\Services\Categories\IndexCategorieService;
use App\Http\Services\Tasks\ShowTaskService;
use App\Http\Services\Tasks\UpdateTaskService;
use App\Models\Task;
use Livewire\Component;

class ShowTask extends Component
{
    public $id;
    public $title;
    public $status;
    public $description;
    public $end_date;
    public $start_date;
    public $categorie_id;

    protected $rules = [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'categorie_id' => 'required',
    ];

    protected $messages = [
        'title.required' => 'É necessário informar o titulo!',
        'status.required' => 'É nescessário informar o status',
        'description.required' => 'É necessário informar a descrição!',
        'start_date.required' => 'É necessário informar a data de inicio!',
        'end_date.required' => 'É necessário informar a data de termino!',
        'categorie_id.required' => 'É necessário informar a categoria!',
    ];
    public function render(ShowTaskService $showTaskService, IndexCategorieService $indexCategorieService)
    {
        $task = $showTaskService->execute($this->id);

        $this->title = $task->title;
        $this->status = $task->status;
        $this->description = $task->description;
        $this->end_date = $task->end_date;
        $this->start_date = $task->start_date;
        $this->categorie_id = $task->categorie_id;

        $categories = $indexCategorieService->execute();
        return view('livewire.show-task',[
            'task' => $task,
            'categories' => $categories,
        ]);
    }

    public function update(UpdateTaskService $updateTaskService)
    {
        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'categorie_id' => $this->categorie_id
        ];
        $this->validate();
        $updateTaskService->execute($this->id,$data);
        return redirect()->route('home');
    }
}
