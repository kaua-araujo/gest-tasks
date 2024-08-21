<?php

namespace App\Http\Services\Categories;

use App\Models\Categorie;

class CreateCategorieService
{
    private Categorie $model ;

    public function __construct(Categorie $model) {
        $this->model = $model;
    }
    public function execute($data)
    {
        Categorie::Create([
            'title' => $data,
        ]);
        return redirect()->route('indexCategories');
       
    }
}