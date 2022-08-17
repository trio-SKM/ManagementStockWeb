<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add produit</title>
</head>

<body>
    <form action="{{ route('produit.store') }}" method="post">
        @csrf
        <label for="produit_ref">REF</label>
        <input type="text" id="produit_ref" name="produit_ref" value="{{ old('produit_ref') }}"><br>
        <label for="produit_libelle">Libelle</label>
        <input type="text" id="produit_libelle" name="produit_libelle" value="{{ old('produit_libelle') }}"><br>
        <label for="produit_qte">Quantité</label>
        <input type="text" id="produit_qte" name="produit_qte" value="{{ old('produit_qte') }}"><br>
        <label for="produit_price">Prix</label>
        <input type="text" id="produit_price" name="produit_ice" value="{{ old('produit_ice') }}"><br>
        <label for="bon_commande">Bon de commande - Fournisseur</label>
        <select name="bon_commande" id="bon_commande">
            @foreach ($bon_commandes as $bon_commande)
                <option value="{{$bon_commande->id}}">{{$bon_commande->id_bc}} - {{$bon_commande->fournisseur}}</option>
            @endforeach
        </select>
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
    <a href="{{ route('produit.index') }}">Afficher tous les produits</a>
</body>

</html>
