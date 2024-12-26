<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UserEdit extends Component
{
    public $user;
    public $name, $email, $role;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'role' => 'required|in:admin,user',
        ]);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur mis à jour.');
    }

    public function render()
    {
        return view('livewire.admin.user-edit');
    }
}
