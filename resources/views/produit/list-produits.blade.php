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
    <table>
        <thead>
            <th>REf</th>
            <th>Libelle</th>
            <th>Quantité</th>
            <th>Prix Unitaire</th>
            <th colspan="2">actions</th>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{$produit->REf}}</td>
                    <td>{{$produit->libelle}}</td>
                    <td>{{$produit->qte}}</td>
                    <td>{{$produit->price}}</td>
                    <td><a href="{{route('produit.edit', ['produit'=>$produit->id]) }}">modifier</a></td>
                    <td><a href="{{ route('produit.destroy', ['produit'=>$produit->id]) }}">supprimer</a></td>
                    <td><a href="{{ route('produit.show', ['produit'=>$produit->id]) }}">détails</a></td>
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
