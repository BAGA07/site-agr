<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;

class Dashboard extends Component
{
    public $userCount;
    public $productCount;
    public $orderCount;
    public $salesTotal;
    

    public function mount()
    {
        $this->userCount = User::count();
        
        /* $this->productCount = Product::count();
        $this->orderCount = Order::count();
        $this->salesTotal = Order::sum('total');  */
    } 

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
