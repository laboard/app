<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwitterUser extends Model
{
    //ユーザ情報テーブル
    public function informations()
    {
        return $this->hasOne('App\Information');
    }

    //募集テーブル
    public function recruits()
    {
        return $this->hasMany('App\Recruit');
    }

    //応募テーブル
    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }
}
