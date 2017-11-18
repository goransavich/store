<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'isbn';

    protected $guarded=[];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
