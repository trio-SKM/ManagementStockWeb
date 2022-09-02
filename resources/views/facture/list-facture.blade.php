<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show facture</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    <label for="facture_num">Num facture</label>
    <input type="text" id="facture_num" readonly name="facture_num" value="{{ $facture->num }}"><br>
    <label for="client">Client</label>
    <input type="text" id="client" readonly name="client" value="{{ $facture->client->nom_complet }}"><br>
    <label for="devie">Devis</label>
    <input type="text" id="devie" readonly name="devie"
        value="@php echo $facture->devie != null? $facture->devie->num: '- - -' @endphp"><br>
    <div>
        <a href="{{ route('facture.index') }}">Afficher les factures</a><br>
        <a href="{{ route('facture.edit', ['facture' => $facture->id]) }}">Modifier</a><br>
        <form action="{{ route('facture.destroy', ['facture' => $facture->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" id="" value="supprimer">
        </form>
    </div>

    <table border="1">
        <thead>
            <th>N°</th>
            <th>REF</th>
            <th>Libelle</th>
            <th>Quantité en stock</th>
            <th>Prix Unitaire</th>
            <th>Quantité</th>
            <th>Prix T</th>
            <th>Bon de commande - Fournisseur</th>
            <th>Telephone</th>
        </thead>
        <tbody>
            @php
                $produits = $facture->devie == null ? $facture->produits : $facture->devie->produits;
            @endphp
            @if (count($produits) > 0)
                @foreach ($produits as $produit)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produit->ref }}</td>
                        <td>{{ $produit->libelle }}</td>
                        <td>{{ $produit->qte }}</td>
                        <td>{{ $produit->price }}</td>
                        <td>@if ($facture->devie == null) {{ $produit->facture_produit->quantity }} @else {{ $produit->devie_produit->quantity }} @endif</td>
                        <td> @if ($facture->devie == null) {{ $produit->price * $produit->facture_produit->quantity }} @else {{ $produit->price * $produit->devie_produit->quantity }} @endif</td>
                        <td>{{ $produit->bon_commande->num }} - {{ $produit->bon_commande->fournisseur->nom_complet }}
                        </td>
                        <td>{{ $produit->bon_commande->fournisseur->telephone }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="9">Il y a aucun produit pour cette facture.</td>
                </tr>
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
