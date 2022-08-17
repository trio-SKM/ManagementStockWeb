<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show devie</title>
</head>

<body>
    <label for="devie_num">Num devie</label>
    <input type="text" id="devie_num" name="devie_num" value="{{ old('devie_num') }}"><br>
    <label for="client">Client</label>
    <input type="text" id="client" name="client" value="{{ old('client') }}"><br>
    <div>
        <form action="{{ route('devie.edit', ['devie' => $devie->id]) }}" method="get">
            @csrf
            <input type="submit" name="" id="" value="modifier">
        </form>
        <form action="{{ route('devie.destroy', ['devie' => $devie->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" id="" value="supprimer">
        </form>
        <a href="{{ route('devie.index') }}">afficher les devies</a>
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
                    <p>Il y a aucun produit pour ce devie.</p>
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
