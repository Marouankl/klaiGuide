<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Randonnees extends Model
{

    protected $table='randonnees';
    protected $primaryKey='code_Randonnees';
    protected $fillable=['code_Randonnees','nbPersonnees_randonnees','dateDebut_Randonnees','dateFin_Randonnees','code_Guides'];




    public function reserver(){
        return $this->hasMany(Reserver::class,'code_Randonnees');

    }
    public function guides(){
        return $this->hasOne(Reserver::class,'code_Guides');

    }

    public function concerner(){
        return$this->hasMany(Concerner::class,'code_Randonnees');
    }

}
