<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [ 'id', 'nom_p', 'description_p', 'prix_p', 'quantite' ];
    // protected $casts = [ 'prix_p' => 'decimal:2', ];
}
