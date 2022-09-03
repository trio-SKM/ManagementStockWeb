<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fournisseur;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index($filter_value)
    {
        $nb_clients = $this->getNbClients($filter_value);
        $nb_fournisseurs = $this->getNbFournisseurs($filter_value);
        $nb_clients_with_credit = $this->getNbClientsWithCredit();
        $nb_fournisseurs_with_dette = $this->getNbFournisseursWithDette();
        $credit = $this->getCredit();
        $dette = $this->getDette();
        $gains = $this->getGains($filter_value);
        return view('dashboard', compact('nb_clients', 'nb_fournisseurs', 'nb_clients_with_credit', 'nb_fournisseurs_with_dette', 'credit', 'dette', 'gains'));
    }
    function getNbClients($filter_value)
    {
        $nb_clients = 0;
        if ($filter_value == 'Today') {
            $nb_clients = Client::where('created_at', 'like', '%' . date_format(today(), 'Y-m-d') . '%')->count();
        } elseif ($filter_value == 'Global') {
            $nb_clients = Client::count();
        }
        return $nb_clients;
    }
    function getNbFournisseurs($filter_value)
    {
        $nb_fournisseurs = 0;
        if ($filter_value == 'Today') {
            $nb_fournisseurs = Fournisseur::where('created_at', 'like', '%' . date_format(today(), 'Y-m-d') . '%')->count();
        } elseif ($filter_value == 'Global') {
            $nb_fournisseurs = Fournisseur::count();
        }
        return $nb_fournisseurs;
    }
    function getCredit()
    {
        $credit = Client::sum('credit');
        return  $credit;
    }
    function getDette()
    {
        $dette = Fournisseur::sum('dette');
        return  $dette;
    }
    function getNbClientsWithCredit()
    {
        $nb_clients_with_credit = Client::where('credit', '<>', 0)->count();
        return $nb_clients_with_credit;
    }
    function getNbFournisseursWithDette()
    {
        $nb_fournisseurs_with_dette = Fournisseur::where('dette', '<>', 0)->count();
        return $nb_fournisseurs_with_dette;
    }
    function getGains($filter_value)
    {
        $gains = 0;
        if ($filter_value == 'Today') {
            $gains = DB::table('facture_produit')
                ->join('factures', 'facture_produit.facture_id', '=', 'factures.id')
                ->join('produits', 'facture_produit.produit_id', '=', 'produits.id')
                ->selectRaw('sum(price * quantity) as total_price')
                ->where('facture_produit.created_at', 'like', '%' . date_format(today(), 'Y-m-d') . '%')
                ->first()
                ->total_price;
            $gains += $gains * 0.2;
        } elseif ($filter_value == 'Global') {
            $gains = DB::table('facture_produit')
                ->join('factures', 'facture_produit.facture_id', '=', 'factures.id')
                ->join('produits', 'facture_produit.produit_id', '=', 'produits.id')
                ->selectRaw('sum(price * quantity) as total_price')
                ->first()
                ->total_price;
            $gains += $gains * 0.2;
        }
        return $gains;
    }
}
