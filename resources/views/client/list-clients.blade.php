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
        <table border="1">
            <thead>
                <th>N°</th>
                <th>Nom complet</th>
                <th>Telephone</th>
                <th>ٌRC</th>
                <th>Nom du societe</th>
                <th>ICE</th>
                <th>Credit</th>
                <th>Date d'enregistrement</th>
                <th colspan="2">actions</th>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $client->nom_complet }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->rc }}</td>
                        <td>{{ $client->nom_societe }}</td>
                        <td>{{ $client->ice }}</td>
                        <td>{{ $client->credit }}</td>
                        <td>{{ date_format($client->created_at, 'Y-m-d') }}</td>
                        <td><a href="{{ route('client.edit', ['client' => $client->id]) }}">modifier</a></td>
                        <td>
                            <form action="{{ route('client.destroy', ['client' => $client->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="supprimer">
                            </form>
                        </td>
                        <td><a href="{{ route('client.show', ['client' => $client->id]) }}">détails</a></td>
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
