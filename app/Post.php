<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'updated_at';

    protected $table = 'posts';

    protected $primaryKey = 'id';

}
