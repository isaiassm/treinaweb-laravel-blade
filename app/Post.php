<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id','title', 'content', 'created_at', 'updated_at'];


    /**
     * Mapeia o relacionamento com o model details
     * 
     * 
     */
    
    public function details()
    {
        return $this->hasOne('App\Details');
    }
}
