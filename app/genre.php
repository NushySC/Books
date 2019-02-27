<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
