<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utente_Consiglio extends Model
{
    //we
    //use HasFactory;
    protected $table = 'utente_consiglios';

    protected $fillable = [
        'id_utente',
        'id_consiglio',
    ];

    public function Utente()
    {
        return $this->belongsToMany('App\Utente');
    }

    public function Consiglio()
    {
        return $this->belongsToMany('App\Consiglio');
    }
}
