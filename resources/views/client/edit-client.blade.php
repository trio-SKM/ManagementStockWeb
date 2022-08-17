<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show client</title>
</head>

<body>
    <form action="{{ route('client.update', ['client' => $client->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nom_complet">Nom complet</label>
        <input type="text" id="nom_complet" name="client_name" value="{{ $client->nom_complet }}"><br>
        <label for="telephone">Telephone</label>
        <input type="text" id="telephone" name="client_tele" value="{{ $client->telephone }}"><br>
        <label for="rc">RC</label>
        <input type="text" id="rc" name="client_rc" value="{{ $client->rc }}"><br>
        <label for="nom_societe">Nom du societé</label>
        <input type="text" id="nom_societe" name="client_nom_societe" value="{{ $client->nom_societe }}"><br>
        <label for="ice">ICE</label>
        <input type="text" id="ice" name="client_ice" value="{{ $client->ice }}"><br>
        <input type="submit" name="" id="" value="modifier">
    </form>
    <br><br><br>
    <div>
        <form action="{{ route('client.destroy', ['client' => $client->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" id="" value="supprimer">
        </form>
        <a href="{{ route('client.index') }}">afficher les clients</a>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->exists('status'))
        {{ session('status', '') }}
    @endif
</body>

</html>
