<?php

namespace App\Livewire;

use App\Models\Categorie;
use Livewire\Component;

class IndexCategories extends Component
{
    public function render()
    {
        $categories = Categorie::get();
        return view('livewire.index-categories',[
            'categories' => $categories
        ]);
    }
}
