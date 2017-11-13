<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    public $timestamps = false;

    protected $fillable = ['id','ultra','ticket','polo'];
}
