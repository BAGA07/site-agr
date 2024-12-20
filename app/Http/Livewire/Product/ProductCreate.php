<?php

namespace App\Livewire;
use App\Models\Product;

use Livewire\Component;

class ProductCreate extends Component
{
    public $produits;
    public function mount(){
        $this->produits = Product::all();

    }
    public function render()
    {
        return view('livewire.product-create');
    }
}
