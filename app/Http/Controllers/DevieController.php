<?php

namespace App\Http\Controllers;

use App\Models\Devie;
use App\Models\Produit;
use Illuminate\Http\Request;

class DevieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('devie.list-devies', compact('devies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits = Produit::all();
        return view('devie.add-devie', compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'devie_num' => 'required|max:255|unique:devies,num',
        ]);

        $devie = Devie::create([
            'num' => $request->devie_num,
        ]);

        if ($devie) {
            $status = 'Le devie était bien ajouté.';
        } else {
            $status = 'Insertion échoue.';
        }
        $request->session()->flash('status', $status);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devie  $devie
     * @return \Illuminate\Http\Response
     */
    public function show(Devie $devie)
    {
        return view('devie.list-devie', compact('devie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devie  $devie
     * @return \Illuminate\Http\Response
     */
    public function edit(Devie $devie)
    {
        return view('devie.edit-devie', compact('devie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devie  $devie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devie $devie)
    {
        $validated = $request->validate([
            'devie_num' => 'required|max:255|unique:devies,num',
        ]);
        $devie->num = $request->devie_num;

        if ($devie->update()) {
            $status = 'Le devie était bien modifié.';
        } else {
            $status = 'Modification échoue.';
        }
        $request->session()->flash('status', $status);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devie  $devie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devie $devie)
    {
        if ($devie->delete())
            $status = "Le devie était bien supprimé.";
        else
            $status = "Supprission échoue.";
        session()->flash('status', $status);

        return redirect(route('bon_commande.index'));
    }
}
