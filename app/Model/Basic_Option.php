<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Basic_Option extends Model
{
    //
    protected $table = 'basic_options';
    protected $fillable = ['description'];
}
