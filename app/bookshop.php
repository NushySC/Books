<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookshop extends Model
{
    protected $fillable = ['name'];
    
    public function book()
    {
        return $this->hasMany('App\Book');
    }
}
