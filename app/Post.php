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

    /** Caso as colunas não seguisem as convecoes poderiamos passar no retorno o nome dos campos
    * return $this->hasOne('App\Details', 'post_id', 'id');
    * A primeira codicao faz referencia a chave estrangeira logo a segunda ao campo da coluna principal
    */
}
