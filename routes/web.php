<?php

use App\Http\Controllers\BonCommandeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\devie\ListDeviesController;
use App\Http\Controllers\DevieController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/login', 'auth.login')->name('login-view');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/produit/byBonCommande/{bon_commande_id}', [ProduitController::class, 'getByBonCommandeId']);
Route::resources(
    [
        'client' => ClientController::class,
        'fournisseur' => FournisseurController::class,
        'bon_commande' => BonCommandeController::class,
        'devie' => DevieController::class,
        'produit' => ProduitController::class,
        'facture' => FactureController::class,
    ]
);
Route::post('convertToInvoice', [ListDeviesController::class, 'convertDevisToInvoice'])->name('covertToInvoice');
Route::get('/dashboard/{filter_value}', [DashboardController::class, 'index'])->name('dashboard');
