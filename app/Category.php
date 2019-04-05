<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Category extends Model
{
    protected $fillable = ['name'];
    public function newmodels(){
        return $this->hasMany('App\NewModel');
    }
}