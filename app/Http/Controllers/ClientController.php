<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.list-clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.add-client');
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
            'client_name' => 'required|max:255',
            'client_rc' => 'required|unique:clients,rc',
            'client_nom_societe' => 'required|max:255',
            'client_ice' => 'required|unique:clients,ice',
        ]);

        $client = Client::create([
            'nom_complet' => $request->client_name,
            'telephone' => $request->client_tele,
            'rc' => $request->client_rc,
            'nom_societe' => $request->client_nom_societe,
            'ice' => $request->client_ice,
        ]);

        if ($client) {
            $status = 'Le client était bien ajouté.';
        } else {
            $status = 'Insertion échoue.';
        }
        $request->session()->flash('status', $status);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('client.list-client', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit-client', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'client_name' => 'required|max:255',
            'client_rc' => ($request->client_rc != $client->rc) ? 'required|unique:clients,rc' : 'required',
            'client_nom_societe' => 'required|max:255',
            'client_ice' => ($request->client_rc != $client->rc) ? 'required|unique:clients,ice' : 'required',
        ]);
        $client->nom_complet = $request->client_name;
        $client->telephone = $request->client_tele;
        $client->rc = $request->client_rc;
        $client->nom_societe = $request->client_nom_societe;
        $client->ice = $request->client_ice;

        if ($client->update()) {
            $status = 'Le client était bien modifié.';
        } else {
            $status = 'Modification échoue.';
        }
        $request->session()->flash('status', $status);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        if ($client->delete())
            $status = "Le client était bien supprimé.";
        else
            $status = "Supprission échoue.";
        session()->flash('status', $status);

        return redirect(route('client.index'));
    }
}
