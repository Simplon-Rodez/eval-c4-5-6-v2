<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    public function movementType() {
        return $this->belongsTo('App\Models\MovementType');
    }

    public function article() {
        return $this->belongsTo('App\Models\Article');
    }
}
