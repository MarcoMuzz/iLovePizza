<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utente_Ricetta extends Model
{

    //use HasFactory;
    protected $table = 'utente_ricettas';

    protected $fillable =[
        'id_utente',
        'id_ricetta',
        'voto',
    ];

    public function Utente()
    {
        return $this->belongsToMany('App\Utente');
    }
}


