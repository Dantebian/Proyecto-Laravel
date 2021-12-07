<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //Relación Many to one
    public function user(){
        return $this->belongsTo('App/User', 'user_id');
    }

    //Relación Many to one
    Public function image(){
        return $this->belongsTo('App/Image', 'image_id');
    }

}
