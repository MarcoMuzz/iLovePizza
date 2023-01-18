<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Associazione extends Model
{
    //use HasFactory;

//we
    protected $fillable = [
        'nome',
        'romana',
        'napoletana',
        'resto',
        'internazionale',
        'utente_id',
        ];

    public function Utente()
    {
        return $this->belongsTo('App\Models\Utente');
    }

    public function Associazione_Utente()
    {
        return $this->hasMany('App\Models\Associazione_Utente');
    }
}
