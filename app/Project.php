<?php

namespace App; //con ese inicio se debe importar en otras funciones

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }
}
