<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    protected $primarykey = 'id';

    protected $fillable = [
        'category_id', 'isbn', 'title', 'author', 'page_count', 'language', 'description', 'path_cover'
    ];

    public function kategoriBuku()
    {
        return $this->hasMany( 'App\BookCategories', 'id', 'category_id' );
    }

}
