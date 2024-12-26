<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    public $users;

    public function salut(){
        echo "je suis la";
    }
    

    public function mount()
    {
        $this->users = User::all();
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $this->users = User::all(); // Rafraîchir la liste
    }

    public function render()
    {
        return view('livewire.admin.user-list');
    }
}
