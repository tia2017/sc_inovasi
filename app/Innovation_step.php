<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Innovation_step extends Model
{
    public function innovation()
    {
        return $this->belongsTo(Innovation::class);
    }
    public function step()
    {
        return $this->belongsTo(Step::class);
    }
}
