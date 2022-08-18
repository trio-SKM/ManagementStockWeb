<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show produit</title>
</head>

<body>
    <label>REF</label>
    <input type="text" readonly value="{{ $produit->ref }}"><br>
    <label>Libelle</label>
    <input type="text" readonly value="{{ $produit->libelle }}"><br>
    {{-- <label for="produit_qte">Quantité</label>
    <input type="text" value="{{ $produit->qte }}"><br> --}}
    <label>Prix</label>
    <input type="text" readonly value="{{ $produit->price }}"><br>
    <label>Bon de commande - Fournisseur</label>
    <input type="text" readonly value="@php echo (($produit->bon_commande != null)?$produit->bon_commande->num . ' - ' . $produit->bon_commande->fournisseur->nom_complet : '- - -'); @endphp"><br>
    <div>
        <a href="{{ route('produit.edit', ['produit' => $produit->id]) }}">Modifier</a>
        <form action="{{ route('produit.destroy', ['produit' => $produit->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="supprimer">
        </form>
    </div>
    <a href="{{ route('produit.index') }}">Afficher les produits</a><br>
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
