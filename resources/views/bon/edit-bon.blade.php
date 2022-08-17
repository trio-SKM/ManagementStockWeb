<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit bon</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    <div>
        <form action="{{ route('bon_commande.update', ['bon_commande' => $bon_commande->id]) }}" method="post">
            @csrf
            @method('PUT')
            <label for="bon_commande_num">Num bon de commande</label>
            <input type="text" id="bon_commande_num" name="bon_commande_num" value="{{ $bon_commande->num }}"><br>
            <label for="bon_commande">Fournisseur</label>
            <select name="bon_commande" id="bon_commande">
                @foreach ($fournisseurs as $fournisseur)
                    <option value="{{ $fournisseur->id }}"
                        {{ ($fournisseur->id == $bon_commande->fournisseur->id )? 'selected' : '' }}>
                        {{ $fournisseur->nom_complet }}
                    </option>
                @endforeach
            </select>
            <input type="submit" name="" id="" value="modifier">
        </form>
        <br><br><br>
        <div>
            <form action="{{ route('bon_commande.destroy', ['bon_commande' => $bon_commande->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" name="" id="" value="supprimer">
            </form>
            <a href="{{ route('bon_commande.index') }}">afficher les bon de commande</a>
        </div>
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
        <table>
            <thead>
                <th>REf</th>
                <th>Libelle</th>
                {{-- <th>Quantité</th> --}}
                <th>Prix Unitaire</th>
                <th colspan="3">actions</th>
            </thead>
            <tbody id="tbl_tbody_produits">
                @if (count($bon_commande->produits) != 0)
                    @foreach ($bon_commande->produits as $produit)
                        <tr>
                            <td>{{ $produit->ref }}</td>
                            <td>{{ $produit->libelle }}</td>
                            <td>{{ $produit->price }}</td>
                            <td><button id="btn_edit_produit">modifier</button></td>
                            <td><button id="btn_delete_produit">supprimer</button></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">Il y a aucun produit dans ce bon de commande.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div>
        <label for="produit_libelle">Libelle</label>
        <input type="text" name="produit_libelle" id="produit_libelle"><br>
        <label for="produit_ref">REF</label>
        <input type="text" id="produit_ref" name="produit_ref"><br>
        <label for="produit_price">Prix U</label>
        <input type="text" id="produit_price" name="produit_price"><br>
        <input type="submit" id="btn_add_produit" value="ajouter ce produit">
        <input type="submit" style="visibility: collapse" id="btn_update_produit" value="modifier ce produit">
    </div>

    <script>
        var produits = {{ Illuminate\Support\Js::from($bon_commande->produits) }};
    </script>
    <script src="{{ asset('js/bon/edit-bon.js') }}"></script>
</body>

</html>
