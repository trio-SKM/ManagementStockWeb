<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All devies</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body>
    @if (session('status'))
        {{ session('status', '') }}
    @endif
    <div>
        <a href="{{ route('devie.create') }}">Ajouter un devie</a>
    </div>
    @if (count($devies) > 0)
        <table border="1">
            <thead>
                <th>N°</th>
                <th>Num devie</th>
                <th>Client</th>
                <th>Facture</th>
                <th colspan="5">actions</th>
            </thead>
            <tbody>
                @foreach ($devies as $devie)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $devie->num }}</td>
                        <td>{{ $devie->client->nom_complet }}</td>
                        <td>@if($devie->facture != null) {{$devie->facture->num}} @else --- @endif</td>
                        <td><a href="{{ route('devie.edit', ['devie' => $devie->id]) }}">modifier</a></td>
                        <td><a href="{{ route('devie.show', ['devie' => $devie->id]) }}">détails</a></td>
                        <td>
                            <form action="{{ route('devie.destroy', ['devie' => $devie->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="supprimer">
                            </form>
                        </td>
                        <td><button class="btn_show_produits" data-devie_id="{{ $devie->id }}">Afficher ces produits</button></td>
                        <td> @if($devie->facture == null)<button class="btn_convert_to_invoice" data-devie_id="{{ $devie->id }}">Convertir á facture</button>@else --- @endif</td>
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
                    <td colspan="7" id="prix_total_devie_HT">...</td>
                </tr>
                <tr>
                    <td colspan="2">Prix total (TT) du devie</td>
                    <td colspan="7" id="prix_total_devie_TT">...</td>
                </tr>
            </tfoot>
        </table>
        <form action="{{ route('covertToInvoice') }}" method="post" id="frm_conversion_to_invoice">
            @csrf
            <legend>Convertir á facture</legend>
            <input type="text" name="facture_num" placeholder="numéro de la facture">
            <input type="hidden" name="devie" id="devie">
            <input type="submit" value="Convertir">
        </form>
    @else
        <div>
            <p>Il y a aucun devie ce moment.</p>
        </div>
    @endif
    <script>
        var produits = {{ Illuminate\Support\Js::from($produits) }};
    </script>
    <script src="{{ asset('js/devie/list-devies.js') }}"></script>
</body>

</html>
