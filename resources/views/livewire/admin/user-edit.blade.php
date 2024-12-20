<div>
    <h1>Modifier l'utilisateur</h1>
    <form wire:submit.prevent="updateUser">
        <div>
            <label>Nom :</label>
            <input type="text" wire:model="name">
            @error('name') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Email :</label>
            <input type="email" wire:model="email">
            @error('email') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Rôle :</label>
            <select wire:model="role">
                <option value="admin">Admin</option>
                <option value="user">Utilisateur</option>
            </select>
            @error('role') <span>{{ $message }}</span> @enderror
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
</div>
