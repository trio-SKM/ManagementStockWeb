<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>All bons</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    @if (session('status'))
        {{ session('status', '') }}
    @endif
    <div>
        <a href="{{ route('bon_commande.create') }}">Ajouter un bon de commande</a>
    </div>
    @if (count($bons) > 0)
        <table>
            <thead>
                <th>Num bon de commande</th>
                <th>Nom de fournisseur</th>
                <th colspan="4">actions</th>
            </thead>
            <tbody>
                @foreach ($bons as $bon)
                    <tr>
                        <td>{{ $bon->num }}</td>
                        <td>{{($bon->fournisseur != null)?$bon->fournisseur->nom_complet: "- - -"}}</td>
                        <td><a href="{{ route('bon_commande.show', ['bon_commande' => $bon->id]) }}">détails</a></td>
                        <td><a href="{{ route('bon_commande.edit', ['bon_commande' => $bon->id]) }}">modifier</a></td>
                        <td>
                            <form action="{{ route('bon_commande.destroy', ['bon_commande' => $bon->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="supprimer">
                            </form>
                        </td>
                        <td>
                            <button class="btn_show_produits" data-bon_commande_id="{{ $bon->id }}">Afficher ses produits</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
    @else
        <div>
            <p>Il y a aucun bon ce moment.</p>
        </div>
    @endif
    <script src="{{ asset('js/bon/list-bons.js') }}"></script>
</body>

</html>
