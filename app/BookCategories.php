<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategories extends Model
{
    public function buku()
    {
        return $this->belongsTo('App\Book');
    }
}
