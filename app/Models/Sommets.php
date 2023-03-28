<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sommets extends Model
{

    protected $table='sommets';
    protected $primaryKey='code_Sommets';
    protected $fillable=[
        'code_Sommets','nom_Sommets','altidue_Sommets'
    ];

    public function concerner(){
        return$this->hasMany(Concerner::class,'code_Sommets');
    }
    public function ascension(){
        return $this->hasMany(Randonnees::class,'code_Sommets');
    }

}
