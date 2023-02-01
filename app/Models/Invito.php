<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Associazione;

/**
 * Autore: Baso
 */
class Invito extends Model
{
    protected $table = 'invitos';
    protected $fillable =[
        'associazione_id',
        'utente_mail',
        'token'

    ];

    public function Associazione(){

        return $this->belongsTo('App\Models\Associazione');
    }
}
