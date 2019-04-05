<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    protected $fillable = [
        'title',
        'content',
        'photo'
        ];
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
