<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = 'questions';
    protected $fillable = [
        'survey_id', 'description', 'type', 'status'
    ];

    public function options() {
        return $this->hasMany('App\Model\Question_Option', 'question_id');
    }
}
