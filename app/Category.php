<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','catalogue_id'];

    public function Products()
    {
        return $this->hasMany('App\Product');
    }

    public function Catalogue()
    {
        return $this->belongsTo('App\Catalogue');
    }
}
