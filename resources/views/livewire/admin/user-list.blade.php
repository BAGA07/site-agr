<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <p class="card-description"> Add class <code>.table-striped</code>
            </p>
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse</th>
                            <th>Email </th>
                            <th>Téléphone</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($users as $user)
                        <tr>
                            <td class="py-1">
                                <img src="../../assets/images/faces-clipart/pic-1.png" alt="image">
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->adresse }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->role }}</td>
                            <td>@if ($user->id)

                                <button wire:click='deleteUser ({{$user->id}})'>Supprimer</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>