<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add client</title>
</head>

<body>
    <form action="{{ route('client.store') }}" method="post">
        @csrf
        <label for="nom_complet">Nom complet</label>
        <input type="text" id="nom_complet" name="client_name" value="{{ old('client_name') }}"><br>
        <label for="telephone">Telephone</label>
        <input type="text" id="telephone" name="client_tele" value="{{ old('client_tele') }}"><br>
        <label for="rc">RC</label>
        <input type="text" id="rc" name="client_rc" value="{{ old('client_rc') }}"><br>
        <label for="nom_societe">Nom du societé</label>
        <input type="text" id="nom_societe" name="client_nom_societe" value="{{ old('client_nom_societe') }}"><br>
        <label for="ice">ICE</label>
        <input type="text" id="ice" name="client_ice" value="{{ old('client_ice') }}"><br>
        <input type="submit" name="btnAdd" id="btnAdd" value="ajouter">
    </form>
    @if (session('status'))
        {{ session('status', '') }}
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{ route('client.index') }}">Afficher tous les clients</a>
</body>

</html>
