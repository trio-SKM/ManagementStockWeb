<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit fournisseur</title>
</head>

<body>
    <form action="{{ route('fournisseur.update', ['fournisseur' => $fournisseur->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nom_complet">Nom complet</label>
        <input type="text" id="nom_complet" name="fournisseur_name" value="{{ $fournisseur->nom_complet }}"><br>
        <label for="telephone">Telephone</label>
        <input type="text" id="telephone" name="fournisseur_tele" value="{{ $fournisseur->telephone }}"><br>
        <label for="rc">RC</label>
        <input type="text" id="rc" name="fournisseur_rc" value="{{ $fournisseur->rc }}"><br>
        <label for="nom_societe">Nom du societé</label>
        <input type="text" id="nom_societe" name="fournisseur_nom_societe" value="{{ $fournisseur->nom_societe }}"><br>
        <label for="ice">ICE</label>
        <input type="text" id="ice" name="fournisseur_ice" value="{{ $fournisseur->ice }}"><br>
        <label for="dette">Dette</label>
        <input type="text" id="dette" name="fournisseur_dette" value="{{ $fournisseur->dette }}"><br>
        <input type="submit" name="" id="" value="modifier">
    </form>
    <br><br><br>
    <div>
        <form action="{{ route('fournisseur.destroy', ['fournisseur' => $fournisseur->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" id="" value="supprimer">
        </form>
        <a href="{{ route('fournisseur.index') }}">afficher les fournisseurs</a>
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
