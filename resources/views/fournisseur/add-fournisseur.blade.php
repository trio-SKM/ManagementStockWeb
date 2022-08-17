<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add fournisseur</title>
</head>

<body>
    <form action="{{ route('fournisseur.store') }}" method="post">
        @csrf
        <label for="nom_complet">Nom complet</label>
        <input type="text" id="nom_complet" name="fournisseur_name" value="{{ old('fournisseur_name') }}"><br>
        <label for="telephone">Telephone</label>
        <input type="text" id="telephone" name="fournisseur_tele" value="{{ old('fournisseur_tele') }}"><br>
        <label for="rc">RC</label>
        <input type="text" id="rc" name="fournisseur_rc" value="{{ old('fournisseur_rc') }}"><br>
        <label for="nom_societe">Nom du societé</label>
        <input type="text" id="nom_societe" name="fournisseur_nom_societe" value="{{ old('fournisseur_nom_societe') }}"><br>
        <label for="ice">ICE</label>
        <input type="text" id="ice" name="fournisseur_ice" value="{{ old('fournisseur_ice') }}"><br>
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
    <a href="{{ route('fournisseur.index') }}">Afficher tous les fournisseurs</a>
</body>

</html>
