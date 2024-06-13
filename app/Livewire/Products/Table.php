<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;


    public function render()
    {

        $products = Product::all();
        return view('livewire.products.table', [
            'products' => Product::paginate(7)
        ]);
    }
}
