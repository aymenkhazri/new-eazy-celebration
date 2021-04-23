<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_service extends Model
{
    public $guarded = [];

    public function user(){
        return $this->hasMany('App\Models\Categorie_service');
    }

    public function annonces(){
        return $this->belongsToMany('App\Models\Annonce');
    }

    
}
