<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Autore: Musciacchio
 */
class Consiglio extends Model
{
    protected $table = 'consiglios';

    protected $fillable =[
        'nome',
        'immagine',
        'contenuto',
        'utente_id',
    ];

    public function Utente()
    {
        return $this->belongsTo('App\Models\Utente');
    }

    public function Utente_Consiglio()
    {
        return $this->hasMany('App\Models\Utente_Consiglio');
    }
}
