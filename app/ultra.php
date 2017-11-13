<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ultra extends Model
{
    public $timestamps = false;

    protected $fillable = ['id','name','email','phone','mlsz','ftc_card','ftc_partner','birthday'];
}