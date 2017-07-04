<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrolled extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'enrolled';

    protected $fillable = array(
        'course_id','user_id', 'dept','session',
    );

    public $timestamps = true;
}
