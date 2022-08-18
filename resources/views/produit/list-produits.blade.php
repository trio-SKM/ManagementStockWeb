<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All produits</title>
</head>

<body>
    @if (session('status'))
        {{ session('status', '') }}
    @endif
    <div>
        <a href="{{ route('produit.create') }}">Ajouter un produit</a>
    </div>
    @if (count($produits) > 0)
        <table border="1">
            <thead>
                <th>REF</th>
                <th>Libelle</th>
                {{-- <th>Quantité</th> --}}
                <th>Prix Unitaire</th>
                <th>Bon de commande - Fournisseur</th>
                <th colspan="3">actions</th>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <td>{{ $produit->ref }}</td>
                        <td>{{ $produit->libelle }}</td>
                        {{-- <td>{{$produit->qte}}</td> --}}
                        <td>{{ $produit->price }}</td>
                        <td>@php echo (($produit->bon_commande != null)?$produit->bon_commande->num . ' - ' . $produit->bon_commande->fournisseur->nom_complet : '- - -'); @endphp</td>
                        <td><a href="{{ route('produit.edit', ['produit' => $produit->id]) }}">modifier</a></td>
                        <td><a href="{{ route('produit.show', ['produit' => $produit->id]) }}">détails</a></td>
                        <td>
                            <form action="{{ route('produit.destroy', ['produit' => $produit->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="supprimer">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div>
            <p>Il y a aucun produit ce moment.</p>
        </div>
    @endif
</body>

</html>
