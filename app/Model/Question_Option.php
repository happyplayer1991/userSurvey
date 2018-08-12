<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question_Option extends Model
{
    //
    protected $table = 'question_options';
    protected $fillable = [
        'question_id', 'basic_question_id', 'link_question_id'
    ];

    public function basicOption() {
        return $this->belongsTo('App\Model\Basic_Option');
    }
}
