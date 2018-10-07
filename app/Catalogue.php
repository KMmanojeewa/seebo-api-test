<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    protected $fillable = ['name'];

    public function Categories()
    {
        return $this->hasMany('App\Category');
    }
    public function Products()
    {
        return $this->hasMany('App\Product');
    }
}
