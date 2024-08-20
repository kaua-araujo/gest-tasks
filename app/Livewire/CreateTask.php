<?php

namespace App\Livewire;

use App\Http\Services\Categories\IndexCategorieService;
use Livewire\Component;
use Exception;

class CreateTask extends Component
{
    public function render(IndexCategorieService $indexCategorieService)
    {
        try{
            $categories = $indexCategorieService->execute();
            return response()->json(['error'=>'teste'], 400); 
            // return view('livewire.create-task', [
            //     'categories' => $categories,
            // ]);
        } catch (\Throwable $e) {
            return response()->json(['error'=> $e], 200); 
        }
       
    }
}
