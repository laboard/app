<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    //ユーザテーブル
    public function twitter_users()
    {
        return $this->hasOne('App\TwitterUser');
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
}
