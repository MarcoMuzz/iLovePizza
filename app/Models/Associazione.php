<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Autore: Stingi
 */
class Associazione extends Model
{
    protected $table = 'associaziones';
    protected $fillable = [
        'nome',
        'romana',
        'napoletana',
        'resto',
        'internazionale',
        'descrizione',
        'utente_id',
        ];

    public function Associazione()
    {
        return $this->belongsToMany('App\Models\Utente');
    }

    public function Associazione_Utente()
    {
        return $this->hasMany('App\Models\Associazione_Utente');
    }

    /*
     * restituisce i dati degli utenti facenti parte dell'associazione
     * insieme al ruolo
     */
    public function Membri()
    {
        return $this->hasManyThrough(
            Utente::class,
            Associazione_Utente::class,
            'associazione_id',
            'id',
            'id',
            'utente_id'
        )->select('utentes.*','associazione_utentes.ruolo')
            ->orderByDesc('ruolo');
    }

    /*
    * restituisce i dati delle ricette scritte dagli utenti facenti parte
    * dell'associazione insieme allo username dell'autore
    */
    public function Ricette()
    {
        return $this->hasManyThrough(
            Utente::class,
            Associazione_Utente::class,
            'associazione_id',
            'id',
            'id',
            'utente_id'
        )->join('ricettas','utentes.id','=','ricettas.utente_id')
            ->select('ricettas.*','utentes.username')
                ->orderBy('created_at');
    }

    /*
    * restituisce i dati dei consigli scritti dagli utenti facenti parte
    * dell'associazione insieme allo username dell'autore
    */
    public function Consigli()
    {
        return $this->hasManyThrough(
            Utente::class,
            Associazione_Utente::class,
            'associazione_id',
            'id',
            'id',
            'utente_id'
        )->join('consiglios','utentes.id','=','consiglios.utente_id')
            ->select('consiglios.*','utentes.username')
                ->orderBy('created_at');
    }


    public function Invito(){

        return $this->hasMany('App\Models\Invito');
    }

}
