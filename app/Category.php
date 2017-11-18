<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey='category_id';

    protected $table = 'categories';

    public static function category_list()
    {
    	return static::all();
    }
}
