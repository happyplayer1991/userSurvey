<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question_Option extends Model
{
    //
    protected $table = 'question_options';
    protected $fillable = [
        'question_id', 'description', 'type', 'link_question_id'
    ];
}
