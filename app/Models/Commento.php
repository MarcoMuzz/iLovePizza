<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commento extends Model
{
    protected $table = 'commentos';
    //use HasFactory;

    protected $fillable =[
        'id_ricetta',
        'id_autore',
        'contenuto',
    ];

    public function Utente()
    {
        return $this->belongsTo('App\Utente');
    }

    public function Ricetta()
    {
        return $this->belongsTo('App\Ricetta');
    }
}
