<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //募集テーブル   
    public function recruits()
    {
        return $this->hasMany('App\Recruit');
    }
}
