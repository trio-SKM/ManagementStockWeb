<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add Bon de commande</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    <form action="{{ route('bon_commande.store') }}" method="post">
        @csrf
        <label for="bon_commande_num">Num bon de commande</label>
        <input type="text" id="bon_commande_num" name="bon_commande_num" value="{{ old('bon_commande_num') }}"><br>
        <label for="fournisseur">Fournisseurs</label>
        <select name="fournisseur" id="fournisseur">
            @foreach ($fournisseurs as $fournisseur)
                <option value="{{$fournisseur->id}}">{{$fournisseur->nom_complet}}</option>
            @endforeach
        </select>

        <div>
            <table border="1">
                <thead>
                    <th>N°</th>
                    <th>REf</th>
                    <th>Libelle</th>
                    <th>Prix Unitaire</th>
                    <th colspan="2">actions</th>
                </thead>
                <tbody id="tbl_tbody_produits">

                </tbody>
            </table>
        </div>
        <input type="hidden" name="produits" id="produits_ids">
        <input type="submit" id="btnAdd" value="ajouter">
    </form>
    @if (session('status'))
        {{ session('status', '') }}
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{ route('bon_commande.index') }}">Afficher tous les bon de commandes</a>

    <div>
        <h2>Ajouter produit dans ce bon</h2>
        <div>
            <form action="{{ route('produit.store') }}" method="post" id="frm_produit">
                <label for="produit_libelle">Libelle</label>
                <input type="text" name="produit_libelle" id="produit_libelle"><br>
                <label for="produit_ref">REF</label>
                <input type="text" id="produit_ref" name="produit_ref"><br>
                <label for="produit_price">Prix U</label>
                <input type="text" id="produit_price" name="produit_price"><br>
                <input type="submit" id="btn_add_produit" value="ajouter ce produit">
                <input type="submit" style="visibility: collapse" id="btn_update_produit" value="modifier ce produit">
            </form>
        </div>
    </div>

    <script src="{{ asset('js/bon/add-bon.js') }}"></script>
</body>

</html>
