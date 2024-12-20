<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AssignRolesToUsersSeeder extends Seeder
{
    public function run()
    {
        // Par exemple, assigner un rôle "admin" au premier utilisateur
        $user = User::first();
        if ($user) {
            $user->update(['role' => 'admin']);
        }

        // Tous les autres restent des utilisateurs
        User::whereNull('role')->update(['role' => 'user']);
    }
}

