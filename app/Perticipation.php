<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perticipation extends Model
{
     protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'perticipation';

    protected $fillable = array(
        'survey_id','user_id','anonim',
    );

    public $timestamps = true;
}
