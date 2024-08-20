<?php

namespace App\Livewire;

use App\Http\Services\Categories\IndexCategorieService;
use App\Http\Services\Tasks\CreateTaskService;
use Livewire\Component;

class CreateTask extends Component
{
    public $title = "";
    public $description = "";
    public $end_date = "";
    public $start_date = "";
    public $categorie_id = "";

    protected $rules = [
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'categorie_id' => 'required',
    ];

    protected $messages = [
        'title.required' => 'É necessário informar o titulo!',
        'description.required' => 'É necessário informar a descrição!',
        'start_date.required' => 'É necessário informar a data de inicio!',
        'end_date.required' => 'É necessário informar a data de termino!',
        'categorie_id.required' => 'É necessário informar a categoria!',
    ];

    public function render(IndexCategorieService $indexCategorieService)
    {
            $categories = $indexCategorieService->execute();
           
            return view('livewire.create-task', [
                'categories' => $categories,
            ]);       
    }

    public function create(CreateTaskService $createTaskService)
    {
        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'categorie_id' => $this->categorie_id
        ];
        $this->validate();

        $createTaskService->execute($data);
    }
}
