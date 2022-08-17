<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show bon</title>
</head>

<body>
    <label for="bon_commande_num">Num bon de commande</label>
    <input type="text" id="bon_commande_num" name="bon_commande_num" value="{{ old('bon_commande_num') }}"><br>
    <label for="fournisseur">fournisseur</label>
    <input type="text" id="fournisseur" name="fournisseur" value="{{ old('fournisseur') }}"><br>
    <div>
        <form action="{{ route('bon_commande.edit', ['bon' => $bon_commande->id]) }}" method="get">
            @csrf
            <input type="submit" name="" id="" value="modifier">
        </form>
        <form action="{{ route('bon_commande.destroy', ['bon' => $bon_commande->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" id="" value="supprimer">
        </form>
        <a href="{{ route('bon_commande.index') }}">afficher les bons</a>
    </div>
    <!-- Do this part with AJAX request: begin-->
    <table>
        <thead>
            <th>REf</th>
            <th>Libelle</th>
            <th>Quantité</th>
            <th>Prix Unitaire</th>
            <th colspan="3">actions</th>
        </thead>
        <tbody>
            @if (count($produits) > 0)
                @foreach ($produits as $produit)
                    <tr>
                        <td>{{ $produit->REf }}</td>
                        <td>{{ $produit->libelle }}</td>
                        <td>{{ $produit->qte }}</td>
                        <td>{{ $produit->price }}</td>
                        <td><a href="{{ route('produit.edit', ['produit' => $produit->id]) }}">modifier</a></td>
                        <td><a href="{{ route('produit.destroy', ['produit' => $produit->id]) }}">supprimer</a>
                        </td>
                        <td><a href="{{ route('produit.show', ['produit' => $produit->id]) }}">détails</a></td>
                    </tr>
                @endforeach
            @else
                <div>
                    <p>Il y a aucun produit pour ce bon de commande.</p>
                </div>
            @endif
        </tbody>
    </table>
    <!-- Do this part with AJAX request: begin-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        {{ session('status', '') }}
    @endif
</body>

</html>
