<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ricetta extends Model
{
    //we
    protected $table = 'ricettas';
    //use HasFactory;
    protected $fillable =[
        'nome',
        'ingredienti',
        'preparazione',
        'romana',
        'napoletana',
        'resto',
        'internazionale',
        'light',
        'vegetariano',
        'senzaglutine',
        'senzalattosio',
        'cottura',
        'immagine',
        'id_autore',
    ];

    public function Utente()
    {
        return $this->belongsTo('App\Utente');
    }

    public function Utente_Ricetta()
    {
        return $this->hasMany('App\Utente_Ricetta');
    }
}
