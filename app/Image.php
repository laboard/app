<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //成果物テーブル
    public function performances()
    {
        return $this->belongsTo('App\Performance');
    }
}
