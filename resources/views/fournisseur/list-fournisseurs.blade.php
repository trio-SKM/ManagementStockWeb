<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All fournisseurs</title>
</head>
<body>
    @if (session()->exists('status'))
        {{ session('status', '') }}
    @endif
    <div>
        <a href="{{ route('fournisseur.create') }}">Ajouter un fournisseur</a>
    </div>
    @if (count($fournisseurs) > 0)
    <table>
        <thead>
            <th>id</th>
            <th>nom complet</th>
            <th>telephone</th>
            <th colspan="2">actions</th>
        </thead>
        <tbody>
            @foreach ($fournisseurs as $fournisseur)
                <tr>
                    <td>{{$fournisseur->id}}</td>
                    <td>{{$fournisseur->nom_complet}}</td>
                    <td>{{$fournisseur->telephone}}</td>
                    <td><a href="{{route('fournisseur.edit', ['fournisseur'=>$fournisseur->id]) }}">modifier</a></td>
                    <td><a href="{{ route('fournisseur.destroy', ['fournisseur'=>$fournisseur->id]) }}">supprimer</a></td>
                    <td><a href="{{ route('fournisseur.show', ['fournisseur'=>$fournisseur->id]) }}">détails</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div>
        <p>Il y a aucun fournisseur ce moment.</p>
    </div>
    @endif
</body>
</html>
