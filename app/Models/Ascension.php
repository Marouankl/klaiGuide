<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ascension extends Model
{

    protected $table='ascenssion';

    protected $fillable=['code_Abris','code_Sommets','defficulte_Ascension','duree_Ascension'];


    public function abri()
    {
        return $this->hasOne(Abris::class,'code_Abris');

    }
    public function sommets(){
        return $this->hasOne(Sommets::class,'code_Sommets');
    }



}
