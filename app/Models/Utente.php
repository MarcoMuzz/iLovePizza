<?php

namespace App\Models;

use App\Models\Associazione_Utente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Autore: Venuto
 */
class Utente extends Authenticatable
{
    use HasFactory;

    protected $fillable =[
        'email',
        'username',
        'nome',
        'cognome',
        'password',
        ];

    public function getCustomAttribute()
    {
        if(Auth::check())
        {
            $uid=Auth::user()->id;
            if(Utente::find($uid)->Associazione_Utente!=null)
            {
                return Utente::find($uid)->Associazione_Utente->ruolo;
            }
        }
        return 0;
    }

    public function Associazione() //restituisce i dati dell'associazione a cui appartiene l'utente
    {
        return $this->hasOneThrough(
            Associazione::class,
            Associazione_Utente::class,
            'utente_id',
            'id',
            'id',
            'associazione_id'
        );

    }


    public function Ricetta()
    {
        return $this->hasMany('App\Models\Ricetta');
    }

    public function Commento()
    {
        return $this->hasMany('App\Models\Commento');
    }

    public function Consiglio()
    {
        return $this->hasMany('App\Models\Consiglio');
    }

    public function Associazione_Utente()
    {
        return $this->hasOne('App\Models\Associazione_Utente');
    }

    public function Utente_Consiglio()
    {
        return $this->hasMany('App\Models\Utente_Consiglio');
    }

    public function Utente_Ricetta()
    {
        return $this->hasMany('App\Models\Utente_Ricetta');
    }

}
