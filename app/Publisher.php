<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publishers';

    public function book()
    {
        //return $this->hasMany('App\Book', 'publisher_id'); // it's automatic but you can write it anyway
        return $this->hasMany(Book::class, 'publisher_id');
    }
}
