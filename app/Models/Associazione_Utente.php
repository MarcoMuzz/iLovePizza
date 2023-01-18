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
    protected $primaryKey = 'associazione_id';

    public function Utente()
    {
        return $this->belongsTo('App\Models\Utente');
    }

    public function Membri()
    {
        return $this->belongsTo('App\Models\Associazione');
    }

    public function Associazione()
    {
        return $this->belongsToMany('App\Models\Associazione');
    }
}
