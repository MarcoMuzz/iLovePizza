<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consiglio extends Model
{
    //we
    //use HasFactory;
    protected $table = 'consiglios';

    protected $fillable =[
        'nome',
        'immagine',
        'contenuto',
        'autore',
    ];

    public function Utente()
    {
        return $this->belongsTo('App\Utente');
    }

    public function Utente_Consiglio()
    {
        return $this->hasMany('App\Utente_Consiglio');
    }
}
