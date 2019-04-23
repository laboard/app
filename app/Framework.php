<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    //ユーザ情報テーブル
    public function informations()
    {
        return $this->belongsToMany('App\Information');
    }

    //プログラミン言語テーブル
    public function programmings()
    {
        return $this->belongsToMany('App\Programming');
    }

    //募集テーブル
    public function recruits()
    {
        return $this->belongsToMany('App\Recruit');
    }

    //成果物テーブル
    public function performances()
    {
        return $this->belongsToMany('App\Performance');
    }
}
