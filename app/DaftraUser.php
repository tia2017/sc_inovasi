<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftraUser extends Model
{
    protected $table = 'users';
    protected $fillable = ['nama', 'email', 'role'];
}
