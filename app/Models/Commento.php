<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Autore: Baso
 */
class Commento extends Model
{
    protected $table = 'commentos';

    protected $fillable =[
        'ricetta_id',
        'utente_id',
        'contenuto',
    ];

    public function Utente()
    {
        return $this->belongsTo('App\Models\Utente');
    }

    public function Commenti()
    {
        return $this->belongsTo('App\Models\Ricetta');
    }
}
