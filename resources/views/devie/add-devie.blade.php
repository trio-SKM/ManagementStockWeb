@extends('app')

@section('title','Ajouter devis')

@section('custom_libs')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('content_page')
<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <!-- Page header -->
        <div class="border-bottom pb-4 mb-4 ">
            <h3 class="mb-0 fw-bold">Overview E12</h3>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="card h100">
            <div class="card-header bg-white py-4">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <input class="form-control form-control-sm" placeholder="N° Devis" type="text" id="nom_complet" name="fournisseur_name" value="{{ old('fournisseur_name') }}">
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="input-group">
                            <select class="livesearchclient form-control" id="client" name="livesearchclient"></select>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-xs-12 col-md-6">
                        <div class="input-group">
                            <select class="livesearchproduit form-control" id="list_produits" name="livesearchproduit"></select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-2">
                        <input class="form-control form-control-sm" placeholder="QTE" type="text" id="produit_qte">
                        <input type="hidden" id="produit_price">
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="input-group">
                            <input class="form-control form-control-sm" placeholder="Prix Total" type="text" id="produit_price_total">
                            <button class="btn btn-secondary btn-sm" type="button" id="btn_add_produit"><i class="bi bi-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table text-nowrap mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>N°</th>
                        <th>REF</th>
                        <th>Libelle</th>
                        <th>Prix U</th>
                        <th>Quantité en stock</th>
                        <th>Quantité</th>
                        <th>Prix Total</th>
                        <th>Actions</th>
                      </tr>
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
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_script')
<script>
    var bons = {{ Illuminate\Support\Js::from($bon_commandes) }};
</script>
<script src="{{ asset('js/devie/add-devie.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.livesearchclient').select2({
        placeholder: 'Select Client',
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.nom_complet,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
    $('.livesearchproduit').select2({
        placeholder: 'Select Produit',
        ajax: {
            url: '/ajax-autocomplete-search-produit',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        debugger
                        return {
                            text: item.ref,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
    });
</script>
@endsection