<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    public $guarded = [];



    public function categorie_evenement(){
        return $this->belongsTo('App\Models\Categorie_evenement');
    }

    public function categorie_service(){
        return $this->belongsTo('App\Models\Categorie_service');
}





public function user(){
    return $this->belongsTo('App\Models\User');
}

}
