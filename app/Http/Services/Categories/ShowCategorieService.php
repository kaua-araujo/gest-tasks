<?php

namespace App\Http\Services\Categories;

use App\Models\Categorie;

class ShowCategorieService
{
    private Categorie $model ;

    public function __construct(Categorie $model) {
        $this->model = $model;
    }
    public function execute($id)
    {
        return $this->model::find($id);
    }
}