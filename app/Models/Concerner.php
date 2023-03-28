<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concerner extends Model
{

    protected $table= 'concerner';
    protected $fillable= ['code_sommets','code_Randonnees','date_Concerner'];

    public function randonne(){
        return $this->hasOne(Randonnees::class,'code_Randonnees');
    }

    public function sommets(){
        return $this->hasOne(Sommets::class,'code_Sommets');
    }


}
