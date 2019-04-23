<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    //ユーザ情報テーブル
    public function twitter_users()
    {
        return $this->belongsTo('App\TwitterUser');
    }

    //成果物テーブル
    public function performances()
    {
        return $this->hasOne('App\Performances');
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
