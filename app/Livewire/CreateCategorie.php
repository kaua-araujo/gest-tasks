<?php

namespace App\Livewire;

use App\Http\Services\Categories\CreateCategorieService;
use App\Http\Services\Categories\IndexCategorieService;
use Livewire\Component;

class CreateCategorie extends Component
{
    public $title = "";
    protected $rules = [
        'title' => 'required',
    ];
    protected $messages = [
    'title.required' => 'É necessário informar o titulo!'
    ];
    public function render(IndexCategorieService $indexCategorieService)
    {   
        $categories = $indexCategorieService->execute();
        return view('livewire.create-categorie',
            [
                'categories' => $categories
            ]);
    }

    public function create(CreateCategorieService $createCategorieService)
    {
        $data =  $this->title;
        $this->validate();

        $createCategorieService->execute($data);
    }
}
