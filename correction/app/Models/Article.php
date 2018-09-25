<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function unit() {
        return $this->belongsTo('App\Models\Unit');
    }
}
