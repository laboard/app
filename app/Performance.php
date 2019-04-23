<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    //募集テーブル
    public function recuits()
    {
        return $this->hasOne('App\Recuit');
    }

    //フレームワークテーブル
    public function frameworks()
    {
        return $this->belongsToMany('App\Framework');
    }

    //プログラミン言語テーブル
    public function programmings()
    {
        return $this->belongsToMany('App\Programming');
    }

    //スキルテーブル
    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }

    //画像テーブル
    public function images()
    {
        return $this->belongsToMany('App\Image');
    }
}
