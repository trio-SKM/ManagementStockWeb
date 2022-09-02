<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All factures</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    @if (session('status'))
        {{ session('status', '') }}
    @endif
    <div>
        <a href="{{ route('facture.create') }}">Ajouter une facture</a>
    </div>
    @if (count($factures) > 0)
        <table border="1">
            <thead>
                <th>N°</th>
                <th>Num facture</th>
                <th>Client</th>
                <th>Devis</th>
                <th colspan="4">actions</th>
            </thead>
            <tbody>
                @foreach ($factures as $facture)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $facture->num }}</td>
                        <td>{{ $facture->client->nom_complet }}</td>
                        <td>@if($facture->devie != null) {{$facture->devie->num}} @else --- @endif</td>
                        <td><a href="@php echo $facture->devie != Null ? route('devie.edit', ['devie' => $facture->devie->id]) : route('facture.edit', ['facture' => $facture->id]) @endphp">modifier</a></td>
                        <td><a href="{{ route('facture.show', ['facture' => $facture->id]) }}">détails</a></td>
                        <td>
                            <form action="{{ route('facture.destroy', ['facture' => $facture->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="supprimer">
                            </form>
                        </td>
                        <td><button class="btn_show_produits" data-facture_id="{{ $facture->id }}" data-devie_id="@php echo $facture->devie != Null ? $facture->devie->id : '' @endphp">Afficher ces produits</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table border="1">
            <thead>
                <th>N°</th>
                <th>REF</th>
                <th>Libelle</th>
                <th>Prix U</th>
                <th>Quantité en stock</th>
                <th>Quantité</th>
                <th>Prix T</th>
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
    @else
        <div>
            <p>Il y a aucune facture ce moment.</p>
        </div>
    @endif
    <script>
        var produits_factures = {{ Illuminate\Support\Js::from($produits_factures) }};
        var produits_devies = {{ Illuminate\Support\Js::from($produits_devies) }};
    </script>
    <script src="{{ asset('js/facture/list-factures.js') }}"></script>
</body>

</html>
