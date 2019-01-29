<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{

    protected $fillable = ['status', 'visibility'];

    /**
     * Mapeia o relacionamento com o model post
     * 
     * 
     */

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
