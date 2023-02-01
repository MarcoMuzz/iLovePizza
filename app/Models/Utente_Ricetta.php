<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Autore: Venuto
 */
class Utente_Ricetta extends Model
{
    protected $table = 'utente_ricettas';

    protected $fillable =[
        'utente_id',
        'ricetta_id',
        'voto',
    ];

    public function Utente()
    {
        return $this->belongsToMany('App\Models\Utente');
    }

    public function Ricetta()
    {
        return $this->belongsTo('App\Models\Ricetta');
    }
}


