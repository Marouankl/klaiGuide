<?php

namespace App\Models;

use App\Models\Vallees;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Abris extends Model
{

    protected $table ='abris';
    protected $primaryKey='code_Abris';
    protected $fillable=[
        'code_Abris',
        'nom_Abris',
        'type_Abris',
        'altitude_Abris',
        'places_Abris',
        'prixNuit_Abris',
        'prixRepas_Abris',
        'telGardien_Abris',
        'code_Vallees'


    ];



     public function valles(){

         return $this->hasMany(Vallees::class,'code_Vallees','code_Abris');
     }
     public function reserver(){
         return $this->hasMany(Reserver::class,'code_Abris');

     }
    public function ascension(){
        return $this->hasMany(Randonnees::class,'code_Guides');
    }



}
