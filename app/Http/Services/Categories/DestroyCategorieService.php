<?php

namespace App\Http\Services\Categories;

use App\Http\Services\Tasks\DestroyTaskWithIdCategorieService;
use App\Models\Categorie;

class DestroyCategorieService
{
    private Categorie $model ;

    public function __construct(Categorie $model) {
        $this->model = $model;
    }
    public function execute($id)
    {

        $categorie = $this->model::find($id);


        if (!$categorie) {
            return null;
        }
        
        return $categorie->delete($id);
    }
}