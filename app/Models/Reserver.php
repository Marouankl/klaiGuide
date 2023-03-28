<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reserver extends Model
{



    protected $table ='reserver';
    protected $fillable=[
        'code_Randonnees','code_Abris','date_Reserver','statut_Reserver'
    ];




    public function abri()
    {
        return $this->hasOne(Abris::class,'code_Abris');

    }
    public function randonne(){
        return $this->hasOne(Randonnees::class,'code_Randonnees');
    }


}
