<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ref',
        'libelle',
        'price',
        'price_buy',
        'qte',
    ];

    /**
     * Get the order form that owns the product.
     */
    public function bon_commande()
    {
        return $this->belongsTo(Bon_commande::class);
    }
    /**
     * The quotations(devies) that belong to the product.
     */
    public function devies()
    {
        return $this->belongsToMany(Devie::class)
                    ->as('devie_produit')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
    /**
     * The invoices(factures) that belong to the product.
     */
    public function factures()
    {
        return $this->belongsToMany(Facture::class)
                    ->as('facture_produit')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
