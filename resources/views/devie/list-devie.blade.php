<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show devie</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    <label for="devie_num">Num devie</label>
    <input type="text" id="devie_num" name="devie_num" value="{{ $devie->num }}"><br>
    <label for="client">Client</label>
    <input type="text" id="client" name="client" value="{{ $devie->client->nom_complet }}"><br>
    <div>
        <a href="{{ route('devie.index') }}">Afficher les devies</a><br>
        <a href="{{ route('devie.edit', ['devie' => $devie->id]) }}">Modifier</a><br>
        <form action="{{ route('devie.destroy', ['devie' => $devie->id]) }}" method="post">
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
            <th>Quantité</th>
            <th>Prix Unitaire</th>
            <th>Quantité</th>
            <th>Prix T</th>
            <th>Bon de commande - Fournisseur</th>
            <th>Telephone</th>
        </thead>
        <tbody>
            @if (count($devie->produits) > 0)
                @foreach ($devie->produits as $produit)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produit->ref }}</td>
                        <td>{{ $produit->libelle }}</td>
                        <td>{{ $produit->qte }}</td>
                        <td>{{ $produit->price }}</td>
                        <td>{{ $produit->devie_produit->quantity }}</td>
                        <td>{{ $produit->price * $produit->devie_produit->quantity }}</td>
                        <td>{{ $produit->bon_commande->num }} - {{ $produit->bon_commande->fournisseur->nom_complet }}</td>
                        <td>{{ $produit->bon_commande->fournisseur->telephone }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">Il y a aucun produit pour ce devie.</td>
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
