<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Clients extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom_complet',
        'telephone',
        'statut_client',
    ];

    protected $table = 'clients';

    protected $primaryKey = 'id_client';

    public function getAuthIdentifierName()
    {
        return 'id_client';
    }
}
