<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programming extends Model
{
    //ユーザ情報テーブル
    public function informations()
    {
        return $this->belongsToMany('App\Information');
    }

    //フレームワークテーブル
    public function frameworks()
    {
        return $this->belongsToMany('App\Framework');
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
