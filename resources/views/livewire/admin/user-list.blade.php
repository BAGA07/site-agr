<div>
    <h1>Liste des utilisateurs</h1>
    <table>
        <thead>ff
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <button wire:click="deleteUser({{ $user->id }})">Supprimer</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
