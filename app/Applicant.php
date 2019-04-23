<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    //ユーザテーブル
    public function twitter_users()
    {
        return $this->belongsTo('App\TwitterUser');
    }

    //募集テーブル
    public function recruits()
    {
        return $this->belongsToMany('App\Recruit');
    }

    //成果物テーブル
    public function performances()
    {
        return $this->belongsTo('App\Performance');
    }
}
