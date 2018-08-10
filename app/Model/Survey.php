<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //
    protected $table = 'surveys';

    protected $fillable = [
        'name', 'description', 'status'
    ];

    public function questions() {
        return $this->hasMany('App\Model\Question', 'survey_id');
    }
    
}
