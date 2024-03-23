<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    public function commandes(): HasMany
    {
        return $this->hasMany(Commande::class);
    }
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
    public function tables(): HasMany
    {
        return $this->hasMany(Table::class);
        
    }
}
