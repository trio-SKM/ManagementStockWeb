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
    ];

    /**
     * Get the order form that owns the product.
     */
    public function bon_commande()
    {
        return $this->belongsTo(Bon_commande::class);
    }
}
