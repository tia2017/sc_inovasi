<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftraUser extends Model
{
    protected $table = 'users_detail';
    protected $fillable = ['nik','nip','name', 'email', 'password', 'gender','address'];
}
