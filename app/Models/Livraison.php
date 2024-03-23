<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livraison extends Model
{
    use HasFactory;
    public function livreurs(): BelongsTo
    {
        return $this->belongsTo(Livreur::class);
    }
    public function commandes()
    {
        return $this->belongsTo(Commande::class);
    }
}
