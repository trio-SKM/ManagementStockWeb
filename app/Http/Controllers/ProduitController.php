<?php

namespace App\Http\Controllers;

use App\Models\Bon_commande;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produit.list-produits', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produit.add-produit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // this validation is so customizable
        Validator::make(
            $request->all(),
            [
                'produit_ref' => 'required|max:255|unique:produits,ref',
                'produit_libelle' => 'required|max:255',
                'produit_price' => 'required|numeric',
            ],
            [
                'required' => 'Le champs :attribute est obligatoire.',
                'unique' => 'Le champs :attribute doit être unique.',
                'numeric' => 'Le champs :attribute doit être numerique',
                'max'
            ],
            [
                'produit_ref' => 'REF',
                'produit_libelle' => 'Libellé',
                'produit_price' => 'Prix',
            ]
        )->validate();

        // this validation is so limited
        // $validated = $request->validate([
        //     'produit_ref' => 'required|max:255|unique:produits,ref',
        //     'produit_libelle' => 'required|max:255',
        //     'produit_price' => 'required|numeric',
        // ]);

        $produit = Produit::create([
            'ref' => $request->produit_ref,
            'libelle' => $request->produit_libelle,
            'qte' => $request->produit_qte,
            'price' => $request->produit_price,
        ]);

        if ($produit) {
            if ($request->ajax()) {
                return $produit;
            }
            $status = 'Le produit était bien ajouté.';
        } else {
            $status = 'Insertion échoue.';
        }
        $request->session()->flash('status', $status);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view('produit.list-produit', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('produit.edit-produit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        Validator::make(
            $request->all(),
            [
                'produit_ref' => ($request->produit_ref != $produit->ref) ? 'required|unique:produits,ref' : 'required',
                'produit_libelle' => 'required|max:255',
                'produit_price' => 'required|numeric',
            ],
            [
                'required' => 'Le champs :attribute est obligatoire.',
                'unique' => 'Le champs :attribute doit être unique.',
                'numeric' => 'Le champs :attribute doit être numerique',
                'max'
            ],
            [
                'produit_ref' => 'REF',
                'produit_libelle' => 'Libellé',
                'produit_price' => 'Prix',
            ]
        )->validate();
        // $validated = $request->validate([
        //     'produit_ref' => ($request->produit_ref != $produit->ref) ? 'required|unique:produits,ref' : 'required',
        //     'produit_libelle' => 'required|max:255',
        //     'produit_price' => 'required|numeric',
        // ]);
        $produit->ref = $request->produit_ref;
        $produit->libelle = $request->produit_libelle;
        $produit->price = $request->produit_price;

        if ($produit->update()) {
            if ($request->ajax()) {
                return $produit;
            }
            $status = 'Le produit était bien modifié.';
        } else {
            $status = 'Modification échoue.';
        }
        $request->session()->flash('status', $status);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        if ($produit->delete())
        {
            if (FacadesRequest::ajax()) {
                return $produit;
            }
            $status = "Le produit était bien supprimé.";
        }
        else
            $status = "Supprission échoue.";
        session()->flash('status', $status);

        return redirect(route('produit.index'));
    }
    public function getByBonCommandeId($bon_commande_id)
    {
        $produits = Bon_commande::find($bon_commande_id)->produits;
        return $produits;
    }
}
