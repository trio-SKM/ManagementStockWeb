<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Show fournisseur</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    <label for="nom_complet">Nom complet</label>
    <input type="text" readonly  value="{{ $fournisseur->nom_complet }}"><br>
    <label for="telephone">Telephone</label>
    <input type="text" readonly value="{{ $fournisseur->telephone }}"><br>
    <label for="rc">RC</label>
    <input type="text" readonly value="{{ $fournisseur->rc }}"><br>
    <label for="nom_societe">Nom du societé</label>
    <input type="text" readonly value="{{ $fournisseur->nom_societe }}"><br>
    <label for="ice">ICE</label>
    <input type="text" readonly value="{{ $fournisseur->ice }}"><br>
    <label for="dette">Dette</label>
    <input type="text" readonly value="{{ $fournisseur->dette }}"><br>
    <div>
        <form action="{{ route('fournisseur.destroy', ['fournisseur'=>$fournisseur->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="" id="" value="supprimer">
        </form>
        <a href="{{route('fournisseur.edit', ['fournisseur'=>$fournisseur->id])}}">Modifier</a>
        <br><br><br>
        <a href="{{route('fournisseur.index')}}">afficher les fournisseurs</a>
    </div>
    <table border="1">
        <thead>
            <th>N°</th>
            <th>Num Bon de commande</th>
            <th colspan="3">Actions</th>
        </thead>
        <tbody id="tbl_bon_commande">
            @if (count($fournisseur->bon_commandes) > 0)
                @foreach ($fournisseur->bon_commandes as $bon_commande)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $bon_commande->num }}</td>
                        <td>
                            <form action="{{ route('bon_commande.edit', ['bon_commande'=>$bon_commande->id]) }}" method="get">
                                @csrf
                                <input type="submit" value="Modifier">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('bon_commande.destroy', ['bon_commande'=>$bon_commande->id, 'page' => 'list-fournisseur']) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="" id="" value="supprimer">
                            </form>
                        </td>
                        <td>
                            <button class="btn_show_produits" data-bon_commande_id="{{$bon_commande->id}}">Afficher ses produits</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">Il y a aucun produit pour ce bon de commande.</td>
                </tr>
            @endif
        </tbody>
    </table><br><br>
    <table border="1">
        <thead>
            <th>N°</th>
            <th>REf</th>
            <th>Libelle</th>
            {{-- <th>Quantité</th> --}}
            <th>Prix Unitaire</th>
            {{-- <th colspan="3">actions</th> TODO in the next version --}}
        </thead>
        <tbody id="tbl_tbody_produits">

        </tbody>
    </table>
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
    <script src="{{ asset('js/fournisseur/list-fournisseur.js') }}"></script>
</body>

</html>
