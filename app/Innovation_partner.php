<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Innovation_partner extends Model
{
    protected $fillable = [
        'innovation_id', 'partner_id'
    ];
    
    public function partner()
    {
        return $this->BelongsTo(partner::class);
    }
}
