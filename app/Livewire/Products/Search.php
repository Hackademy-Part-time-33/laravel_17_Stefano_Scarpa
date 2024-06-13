<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $keyword = '';
    public function render()
    {
        if($this->keyword){
           dd( Product::where('name','LIKE','%' . $this->keyword . '%')->get());
        }
        return view('livewire.products.search');
    }
}
