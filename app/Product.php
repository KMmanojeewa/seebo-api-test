<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','catalogue_id','category_id','icon'];

    public function Catalogue()
    {
        return $this->belongsTo('App\Catalogue');
    }
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
}
