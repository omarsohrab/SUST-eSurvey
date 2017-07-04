<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'survey_id';
    protected $table = 'surveys';

    protected $fillable = array(
        'survey_title', 'description','commity_id','course_code','creator_id','is_template','expired',
    );

    public $timestamps = true;
}
