<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $table = 'answers';

    protected $fillable = [
        'survey_id', 'question_id', 'question_option_id'
    ];
}
