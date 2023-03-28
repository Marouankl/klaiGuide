<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guides  extends  Model
{

    protected $table='guides';
    protected $primaryKey='code_Guides';
    protected $fillable=['code_Guides','nom_Guides','pernom_Guides','email_Guides','motdepasse_Guides'];





    public function randonne(){
        return $this->hasMany(Randonnees::class,'code_Guides');
    }



}
