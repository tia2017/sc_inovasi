<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name', 'form'
    ];
    public function innovation_partner()
    {
        return $this->hasMany(Innovation::class);
    }    
}
