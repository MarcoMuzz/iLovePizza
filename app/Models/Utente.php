<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utente extends Model
{
    //we
    use HasFactory;

    protected $fillable =[
        'email',
        'username',
        'nome',
        'cognome',
        'password',
        ];

    public function AU_Utente()
    {
        return $this->belongsTo('App\Models\Associazione_Utente');
    }

    public function Associazione()
    {
        return $this->HasOne('App\Models\Associazione');
    }

    public function Ricetta()
    {
        return $this->hasMany('App\Models\Ricetta');
    }

    public function Consiglio()
    {
        return $this->hasMany('App\Models\Consiglio');
    }

    public function Associazione_Utente()
    {
        return $this->hasMany('App\Models\Associazione_Utente');
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
