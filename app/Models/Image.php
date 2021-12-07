<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model

{
    protected $table = 'images';

    // Relación one to many (de uno a muchos)
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    // Relación one to many
    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    //Relación many to one
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}