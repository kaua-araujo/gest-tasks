<?php

namespace App\Http\Services\Categories;

use App\Models\Categorie;

class IndexCategorieService
{
    private Categorie $model ;

    public function __construct(Categorie $model) {
        $this->model = $model;
    }
    public function execute()
    {
        return $this->model::get();
    }
}