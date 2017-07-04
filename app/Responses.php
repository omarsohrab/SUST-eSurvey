<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responses extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'responses';

    protected $fillable = array(
        'user_id','question_id', 'question_type','survey_id','res1','res2','res3','res4','res5',
    );

    public $timestamps = true;
}
