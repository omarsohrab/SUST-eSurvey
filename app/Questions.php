<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'questions';

    protected $fillable = array(
        'survey_id', 'question','question_type','description',
    );

    public $timestamps = true;
}
