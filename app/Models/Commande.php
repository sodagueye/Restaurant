<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    public function clients(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function livraisons()
    {
        return $this->hasOne(Livraison::class);
    }
    public function paiements()
    {
        return $this->hasOne(Paiement::class);
    }
}
