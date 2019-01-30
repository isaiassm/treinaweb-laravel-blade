<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['title', 'content'];
    /**
     * Mapeia o relacionamento com o model posts
     * 
     * 
     */
    public function post()
    {
       return $this->belongsTo('App\Post');
    }
}
