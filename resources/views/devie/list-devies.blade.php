<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All devies</title>
</head>

<body>
    @if (session('status'))
        {{ session('status', '') }}
    @endif
    <div>
        <a href="{{ route('devie.create') }}">Ajouter un devie</a>
    </div>
    @if (count($devies) > 0)
        <table>
            <thead>
                <th>Num devie</th>
                <th colspan="3">actions</th>
            </thead>
            <tbody>
                @foreach ($devies as $devie)
                    <tr>
                        <td>{{ $devie->REf }}</td>
                        <td><a href="{{ route('devie.edit', ['devie' => $devie->id]) }}">modifier</a></td>
                        <td><a href="{{ route('devie.destroy', ['devie' => $devie->id]) }}">supprimer</a></td>
                        <td><a href="{{ route('devie.show', ['devie' => $devie->id]) }}">détails</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
                        <p>Il y a aucun produit pour ce devie.</p>
                    </div>
                @endif
            </tbody>
        </table>
        <!-- Do this part with AJAX request: begin-->
    @else
        <div>
            <p>Il y a aucun devie ce moment.</p>
        </div>
    @endif
</body>

</html>
