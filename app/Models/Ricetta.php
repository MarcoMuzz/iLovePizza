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
        'utente_id',
    ];

    public function Utente()
    {
        return $this->belongsTo('App\Models\Utente');
    }

    public function Utente_Ricetta()
    {
        return $this->hasMany('App\Models\Utente_Ricetta');
    }

    public function Voti()
    {
        return $this->hasMany('App\Models\Utente_Ricetta');
    }

    /*
     * restituisce tutti i commenti della ricetta con le relative informazoni
     * degli autori
     */
    public function Commenti()
    {
        return $this->hasMany('App\Models\Commento')
            ->join('utentes','utente_id','=','utentes.id')->select('username','contenuto','commentos.id','commentos.created_at');
    }

    /*
    * restituisce tutti i commenti della ricetta con le relative informazoni
    * degli autori
    */
    public function Associazione()
    {
        return $this->hasOneThrough(
            Associazione_Utente::class,
            Utente::class,
            'id',
            'utente_id',
            'id',
            'id'
        )->join('associaziones','associazione_id','=','associazione_id')->select('associaziones.*');
    }



}
