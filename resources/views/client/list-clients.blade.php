<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All clients</title>
</head>
<body>
    @if (session()->exists('status'))
        {{ session('status', '') }}
    @endif
    <div>
        <a href="{{ route('client.create') }}">Ajouter un client</a>
    </div>
    @if (count($clients) > 0)
    <table>
        <thead>
            <th>id</th>
            <th>nom complet</th>
            <th>telephone</th>
            <th colspan="2">actions</th>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->nom_complet}}</td>
                    <td>{{$client->telephone}}</td>
                    <td><a href="{{route('client.edit', ['client'=>$client->id]) }}">modifier</a></td>
                    <td><a href="{{ route('client.destroy', ['client'=>$client->id]) }}">supprimer</a></td>
                    <td><a href="{{ route('client.show', ['client'=>$client->id]) }}">détails</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div>
        <p>Il y a aucun client ce moment.</p>
    </div>
    @endif
</body>
</html>
