<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add facture</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    <div style="border-bottom: 2px solid gray">
        <form action="{{ route('facture.store') }}" method="post">
            @csrf
            <label for="facture_num">Num facture</label>
            <input type="text" id="facture_num" name="facture_num" value="{{ old('facture_num') }}"><br>
            <label for="client">client</label>
            <select name="client" id="client">
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->nom_complet}}</option>
                @endforeach
            </select>
            <table border="1">
                <thead>
                    <th>N°</th>
                    <th>REF</th>
                    <th>Libelle</th>
                    <th>Prix U</th>
                    <th>Quantité en stock</th>
                    <th>Quantité</th>
                    <th>Prix T</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody id="tbl_tbody_produits">

                </tbody>
                <tfoot id="tbl_tfoot_price_global">
                    <tr>
                        <td colspan="2">Prix total HT</td>
                        <td colspan="7" id="prix_total_facture_HT">...</td>
                    </tr>
                    <tr>
                        <td colspan="2">Prix total (TT) du facture</td>
                        <td colspan="7" id="prix_total_facture_TT">...</td>
                    </tr>
                </tfoot>
            </table>
            <input type="hidden" name="produits" id="produits_ids">
            <input type="hidden" name="quantities" id="quantities_values">
            <input type="submit" name="btnAdd" id="btnAdd" value="ajouter">
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
        <a href="{{ route('bon_commande.index') }}">Afficher tous les factures</a>
    </div>
    <div>
        <h2>Ajouter produit dans ce facture</h2>
        <div>
            <label for="produit_libelle">Libelle</label>
            <select id="list_produits">
                @foreach ($bon_commandes as $bon_commande)
                    @foreach ($bon_commande->produits as $produit)
                        <option value="{{$produit->id}}" data-bon_commande_num_fournisseur_nom="{{$bon_commande->num}} - {{$bon_commande->fournisseur->nom_complet}}">{{$produit->libelle}}</option>
                    @endforeach
                @endforeach
            </select><br>
            <label for="produit_ref">REF</label>
            <input type="text" id="produit_ref" readonly><br>
            <label for="bon_commande">Bon de commande - Fournisseur</label>
            <input type="text" id="bon_commande" readonly><br>
            <label for="produit_price">Prix U</label>
            <input type="text" id="produit_price" readonly><br>
            <label for="produit_qte_stock">Quantité en stock</label>
            <input type="text" id="produit_qte_stock" readonly><br>
            <label for="produit_qte">Quantité</label>
            <input type="text" id="produit_qte"><br>
            <label for="produit_price_total">Prix Total</label>
            <input type="text" id="produit_price_total" readonly><br>
            <input type="submit" id="btn_add_produit" value="ajouter ce produit">
            <input type="submit" style="visibility: collapse" id="btn_update_produit" value="modifier ce produit">
        </div>
    </div>
    <script>
        var bons = {{ Illuminate\Support\Js::from($bon_commandes) }};
    </script>
    <script src="{{ asset('js/facture/add-facture.js') }}"></script>
</body>

</html>
