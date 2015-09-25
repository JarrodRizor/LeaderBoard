<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['name', 'twitter', 'score'];
    public $timestamps = false;
}
