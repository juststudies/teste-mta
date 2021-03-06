<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;    
    public $timestamps = false;
    protected $fillable = ['name', 'username', 'password'];
    protected $dates = ['deleted_at'];
}
