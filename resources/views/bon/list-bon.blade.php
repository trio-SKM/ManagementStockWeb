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
    <input type="text" id="bon_commande_num" readonly value="{{$bon_commande->num}}"><br>
    <label for="fournisseur_nom_complet">Nom complet du fournisseur</label>
    <input type="text" id="fournisseur_nom_complet" readonly value="{{$bon_commande->fournisseur->nom_complet}}"><br>
    <label for="fournisseur_tel">Téléphone de fournisseur</label>
    <input type="text" id="fournisseur_tel" readonly value="{{$bon_commande->fournisseur->telephone}}"><br>
    <div>
        <form action="{{ route('bon_commande.destroy', ['bon_commande' => $bon_commande->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" id="" value="supprimer">
        </form>
        <a href="{{ route('bon_commande.edit', ['bon_commande' => $bon_commande->id]) }}">Modifier</a><br><br>
        <a href="{{ route('bon_commande.index') }}">Afficher les bons</a>
    </div>
    <table border="1">
        <thead>
            <th>N°</th>
            <th>REF</th>
            <th>Libelle</th>
            <th>Prix d'achat</th>
            <th>Prix Unitaire</th>
            <th>Quantité</th>
        </thead>
        <tbody>
            @if (count($bon_commande->produits) > 0)
                @foreach ($bon_commande->produits as $produit)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produit->ref }}</td>
                        <td>{{ $produit->libelle }}</td>
                        <td>{{ $produit->price_buy }}</td>
                        <td>{{ $produit->price }}</td>
                        <td>{{ $produit->qte }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">Il y a aucun produit pour ce bon de commande.</td>
                </tr>
            @endif
        </tbody>
    </table>
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
