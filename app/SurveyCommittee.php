<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyCommittee extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'committee';

    protected $fillable = array(
        'title','dept', 'course_code','head_id','creator_id','member_id',
    );

    public $timestamps = true;
}
