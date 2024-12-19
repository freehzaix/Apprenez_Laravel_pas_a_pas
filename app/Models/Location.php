<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'date_fin',
        'prix_location',
    ];

    public function vehicules(): BelongsTo
    {
        return $this->belongsTo(Vehicule::class, 'vehicule_id');
    }

    public function clients(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

}
