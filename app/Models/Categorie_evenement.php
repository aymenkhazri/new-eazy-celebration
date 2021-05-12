<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_evenement extends Model
{
    public $guarded = [];

    public function annonces(){
        return $this->hasMany('App\Models\Annonce');
    }
}
