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
    <table border="1">
        <thead>
            <th>N°</th>
            <th>Nom complet</th>
            <th>Telephone</th>
            <th>Nom du societé</th>
            <th>RC</th>
            <th>ICE</th>
            <th>Dette</th>
            <th colspan="3">actions</th>
        </thead>
        <tbody>
            @foreach ($fournisseurs as $fournisseur)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$fournisseur->nom_complet}}</td>
                    <td>{{$fournisseur->telephone}}</td>
                    <td>{{$fournisseur->nom_societe}}</td>
                    <td>{{$fournisseur->rc}}</td>
                    <td>{{$fournisseur->ice}}</td>
                    <td>{{$fournisseur->dette}} Dhs</td>
                    <td><a href="{{ route('fournisseur.show', ['fournisseur'=>$fournisseur->id]) }}">détails</a></td>
                    <td><a href="{{route('fournisseur.edit', ['fournisseur'=>$fournisseur->id]) }}">modifier</a></td>
                    <td>
                        <form action="{{ route('fournisseur.destroy', ['fournisseur'=>$fournisseur->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="supprimer">
                        </form>
                    </td>
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
