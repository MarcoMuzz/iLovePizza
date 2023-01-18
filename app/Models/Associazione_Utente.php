<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associazione_Utente extends Model
{
    //we
    protected $table = 'associazione_utentes';

    protected $fillable =[
        'associazione_id',
        'utente_id',
        'ruolo',
    ];
    protected $primaryKey = 'utente_id';

    public function Utente()
    {
        return $this->belongsToMany('App\Models\Utente');
    }

    public function AU_Utente()
    {
        return $this->hasOne('App\Models\Utente');
    }

    public function Associazione()
    {
        return $this->belongsToMany('App\Models\Associazione');
    }
}
