<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
        'authors',
        'image',
        'publisher_id'
    ];

//    protected $guarded = []; two methods?

    public function publisher()
    {
        return $this->belongsTo('App\publisher');
                    //belongsTo(Publisher::class , 'publisher_id');
    }

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    public function bookshop()
    {
        return $this->belongsTo('App\Bookshop');
    }
}
