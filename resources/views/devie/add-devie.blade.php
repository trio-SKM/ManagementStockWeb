<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add devie</title>
</head>

<body>
    <div style="border-bottom: 2px solid gray">
        <form action="{{ route('produit.store') }}" method="post">
            @csrf
            <label for="devie_num">Num devie</label>
            <input type="text" id="devie_num" name="devie_num" value="{{ old('devie_num') }}"><br>
            <label for="client">client</label>
            <select name="client" id="client">
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->nom_complet}}</option>
                @endforeach
            </select>
            <table id="tbl_produits">
                <thead>
                    <th>REF</th>
                    <th>Libelle</th>
                    <th>Prix U</th>
                    <th>Qté</th>
                    <th>Prix T</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>

                </tbody>
            </table>
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
        <a href="{{ route('bon_commande.index') }}">Afficher tous les devies</a>
    </div>
    <div>
        <h2>Ajouter produit dans ce devie</h2>
        <div>
            <label for="produit_libelle">Libelle</label>
            <select name="produit" id="produit">
                @foreach ($produits as $produit)
                    <option value="{{$produit->id}}">{{$produit->libelle}}</option>
                @endforeach
            </select>
            <label for="produit_ref">REF</label>
            <input type="text" id="produit_ref" value="{{ $produit->ref }}" readonly><br>
            <label for="bon_commande">Bon de commande - Fournisseur</label>
            <input type="text" id="bon_commande" value="{{ $produit->bon_commande->num }} - {{$produit->bon_commande->fornisseur->nom_complet}}" readonly><br>
            <label for="produit_price">Prix U</label>
            <input type="text" id="produit_price" value="{{ $produit->price }}" readonly><br>
            <label for="produit_qte">Quantité</label>
            <input type="text" id="produit_qte"><br>
            <label for="produit_price_total">Prix Total</label>
            <input type="text" id="produit_price_total" readonly><br>
            <input type="submit" id="btnAdd" value="ajouter ce produit">
        </div>
    </div>
    <script src="{{ asset('js/devie/add-devie.js') }}"></script>
</body>

</html>
