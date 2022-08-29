<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_complet',
        'telephone',
        'rc',
        'nom_societe',
        'ice',
        'credit',
    ];

    /**
     * Get the quotations (devis) for the client.
     */
    public function devies()
    {
        return $this->hasMany(Devie::class);
    }
    /**
     * Get the invoices (factures) for the client.
     */
    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
}
