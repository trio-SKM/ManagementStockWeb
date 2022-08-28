<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit devie</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    <form action="{{ route('devie.update', ['devie' => $devie->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="devie_num">Num devie</label>
        <input type="text" id="devie_num" name="devie_num" value="{{ $devie->num }}"><br>
        <label for="client">client</label>
        <select name="client" id="client">
            @foreach ($clients as $client)
                <option value="{{ $client->id }}" {{ $client->id == $devie->client->id ? 'selected' : '' }}>
                    {{ $client->nom_complet }}</option>
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
                @foreach ($devie->produits as $produit)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produit->ref }}</td>
                        <td>{{ $produit->libelle }}</td>
                        <td>{{ $produit->price }}</td>
                        <td>{{ $produit->qte }}</td>
                        <td>{{ $produit->devie_produit->quantity }}</td>
                        <td>{{ $produit->price * $produit->devie_produit->quantity }}</td>
                        </td>
                        <td>
                            <button class="btn_edit_produit" data-produit_id="{{ $produit->id }}">modifier</button>
                        </td>
                        <td>
                            <button class="btn_Delete_produit" data-produit_id="{{ $produit->id }}">supprimer</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot id="tbl_tfoot_price_global">
                <tr>
                    <td colspan="2">Prix total HT</td>
                    @php
                        $price_total = 0;
                        foreach ($devie->produits as $produit) {
                            $price_total += $produit->price * $produit->devie_produit->quantity;
                        }
                    @endphp
                    <td colspan="7" id="prix_total_devie_HT">{{ $price_total }}</td>
                </tr>
                <tr>
                    <td colspan="2">Prix total (TT) du devie</td>
                    <td colspan="7" id="prix_total_devie_TT">{{ ($price_total * 20) / 100 + $price_total }}</td>
                </tr>
            </tfoot>
        </table>
        @php
            // get products ids & their quantities:
            $produits_ids_arr = collect([]);
            $quantities_values_arr = collect([]);
            foreach ($devie->produits as $produit) {
                $produits_ids_arr[] = $produit->id;
                $quantities_values_arr[] = $produit->devie_produit->quantity;
            }
        @endphp
        <input type="hidden" name="produits" id="produits_ids" value="{{ $produits_ids_arr->join(',') }}">
        <input type="hidden" name="quantities" id="quantities_values" value="{{ $quantities_values_arr->join(',') }}">
        <input type="submit" name="" id="" value="modifier">
    </form>
    <br><br><br>
    <div>
        <form action="{{ route('devie.destroy', ['devie' => $devie->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" id="" value="supprimer">
        </form>
        <a href="{{ route('devie.index') }}">afficher les devies</a>
    </div>
    <div>
        <h2>Ajouter produit dans ce devie</h2>
        <div>
            <label for="produit_libelle">Libelle</label>
            <select id="list_produits">
                @foreach ($bon_commandes as $bon_commande)
                    @foreach ($bon_commande->produits as $produit)
                        <option value="{{ $produit->id }}"
                            data-bon_commande_num_fournisseur_nom="{{ $bon_commande->num }} - {{ $bon_commande->fournisseur->nom_complet }}">
                            {{ $produit->libelle }}</option>
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
    <script>
        var bons = {{ Illuminate\Support\Js::from($bon_commandes) }};
    </script>
    <script src="{{ asset('js/devie/edit-devie.js') }}"></script>
</body>

</html>
