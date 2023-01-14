<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utente extends Model
{
    use HasFactory;

    protected $fillable =[
        'email',
        'username',
        'nome',
        'cognome',
        'password',
        ];

    public function Associazione()
    {
        return $this->HasOne('App\Associazione');
    }

    public function Ricetta()
    {
        return $this->hasMany('App\Ricetta');
    }

    public function Consiglio()
    {
        return $this->hasMany('App\Consiglio');
    }

    public function Associazione_Utente()
    {
        return $this->hasMany('App\Associazione_Utente');
    }

    public function Utente_Consiglio()
    {
        return $this->hasMany('App\Utente_Consiglio');
    }

    public function Utente_Ricetta()
    {
        return $this->hasMany('App\Utente_Ricetta');
    }

}
