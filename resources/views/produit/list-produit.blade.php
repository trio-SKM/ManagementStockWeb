@extends('app')

@section('title', 'Details de ' . $produit->ref)

@section('content_page')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4 ">
                <h3 class="mb-0 fw-bold">Overview {{ $produit->ref }}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center
                    justify-content-between">
                        <div>
                            <h4 class="mb-0">Produit: </h4>
                        </div>
                    </div>
                    <div class="mt-3">
                        {{-- <img src="../assets/images/placeholder/placeholder-4by3.svg" class="card-img-top mb-2"
                            alt="..."> --}}
                        <h4 class="card-title">{{ $produit->libelle }}</h4>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <h5 class="">Les caractèristique de produit</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul> --}}
                    </div>
                    <div class="d-flex align-items-center justify-content-around">
                        <div class="text-center">
                            <h1 class="mt-3  mb-1 fw-bold">{{ $produit->price }}</h1>
                            <p>Prix d'achat</p>
                        </div>
                        <div class="text-center">
                            <h1 class="mt-3  mb-1 fw-bold">{{ $produit->price_buy }}</h1>
                            <p>Prix d'achat</p>
                        </div>
                        <div class="text-center">
                            <h1 class="mt-3  mb-1 fw-bold">{{ $produit->qte }}</h1>
                            <p>Quantité</p>
                        </div>
                        @if ($produit->bon_commande != null)
                            <div class="text-center">
                                <h1 class="mt-3  mb-1 fw-bold">{{ $produit->bon_commande->num }}</h1>
                                <p>Bon de commande</p>
                            </div>
                            <div class="text-center">
                                <h1 class="mt-3  mb-1 fw-bold">{{ $produit->bon_commande->fournisseur->nom_complet }}</h1>
                                <p>Fournisseur</p>
                            </div>
                        @endif
                    </div>
                    <div class="d-grid gap-2">
                        <a href="{{ route('produit.edit', ['produit' => $produit->id]) }}"
                            class="btn btn-primary">Modifier</a>
                        <form action="{{ route('produit.destroy', ['produit' => $produit->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger w-100" type="submit" name="btn_delete_produit"
                                id="btn_delete_produit" value="Supprimer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12 col-md-12 col-12">
            <div class="card h-100">
                <div class="card-header bg-white py-4">
                    <h4 class="mb-0">Historique de produit </h4>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Last Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="../assets/images/avatar/avatar-2.jpg" alt=""
                                                class="avatar-md avatar rounded-circle">
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class=" mb-1">Anita Parmar</h5>
                                            <p class="mb-0">anita@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">Front End Developer</td>
                                <td class="align-middle">3 May, 2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
