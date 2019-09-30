<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Innovation extends Model
{
    
    protected $fillable = [
        'name', 'institute_id', 'innovation_type_id', 'pilar_id', 'created_by' ,
        'description', 'benefit', 'unique_creativity', 'potency', 'strategy', 'risk_analysis',
        'resource', 'date', 'verification_status'];

    public function pilar()
    {
        return $this->belongsTo(Pilar::class);
    }
    public function innovation_step()
    {
        return $this->hasMany(Innovation_step::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}

