<?php

namespace App\Http\Controllers\devie;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Devie;
use App\Models\Facture;
use Illuminate\Http\Request;

class ListDeviesController extends Controller
{
    public function convertDevisToInvoice(Request $request)
    {
        $validated = $request->validate([
            'facture_num' => 'required|max:255|unique:factures,num',
            'devie' => 'required|numeric',
        ]);

        $devie = Devie::find($request->devie);
        $client = Client::find($devie->client->id);
        $facture = new Facture(['num' => $request->facture_num,]);
        if ($devie && $client) {
            if ($devie->facture()->save($facture) && $client->factures()->save($facture)) {
                $status = 'La facture était bien ajouté.';
            } else {
                $status = 'Insertion echouée.';
            }
        }else{
            $status = 'Devis n\'existe pas.';
        }
        $request->session()->flash('status', $status);

        return redirect(route('facture.index'));
    }
}
