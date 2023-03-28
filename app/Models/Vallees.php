<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use App\Models\Abris;

class Vallees extends Model
{
    protected $table ='vallees';
    protected $primaryKey='code_Vallees';
    protected $fillable=[
        'code_Vallees',
        'nom_Vallees'

        ];

    /***
     * Relation la tables abris avec la table Vallees
     *tables principale vers table <1> secondaire <0.*> utiliser hasMany
     */

    public function abris(){
        return $this->belongsTo(Abris::class,'code_Vallees','code_Abris');


    }



}
